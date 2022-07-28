<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\states;
use App\country;
use Session;
use Hash;
use File;
use Auth;
use App\User;
use App\banks;
use App\activities;
use App\packages;
use App\investment;
use App\msg;
use App\admin;
use App\deposits;
use App\withdrawal;
use App\adminLog;
use App\xpack_inv;
use Validator;
use App\site_settings;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;
use Paystack;

class paystackController extends Controller
{
    private $st;
   
    public function __construct()
    {
        // parent::__construct();
        $this->st = site_settings::find(1);
            
    }

    public function pay_page()
    {
        return view('user.paystack');
    }
    
    public function redirectToGateway(Request $req)
    {
        if((FLOAT)$req->input('amount') == 0 || (FLOAT)$req->input('amount') < (FLOAT)env('MIN_DEPOSIT'))
        {
            return back()->With([
              'toast_msg' => 'Amount is lower than minimum deposits',
              'toast_type' => 'err'
            ]);
        }
        if((FLOAT)$req->input('amount') > (FLOAT)env('MAX_DEPOSIT'))
        {
            return back()->With([
              'toast_msg' => 'Amount is higher than '.env('CURRENCY').env('MAX_DEPOSIT').' maximum deposits',
              'toast_type' => 'err'
            ]);
        }
        try
        {
            // $req->input('amount') = $req->input('amount') * 100;
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        catch(\Exception $e)
        {
            return back()->With([
              'toast_msg' => 'Error! '.$e->getMessage(),
              'toast_type' => 'err'
            ]);
        }
        
    }

    
    public function callback()
    {
        $paymentDetails = Paystack::getPaymentData();
        // dd($paymentDetails); 
        
        if ($paymentDetails['data']['status'] == 'success') { 
            try
            {
                $check_dep = deposits::where('pop', $paymentDetails['data']['reference'])->get();
                if(count($check_dep) > 0)
                {
                    return redirect()->route('paystack.index')->with([
                      'toast_msg' => 'Deposit transaction was already completed!',
                      'toast_type' => 'err'
                    ]);
                }
                $st = site_settings::find(1);
                $user = User::where('email', $paymentDetails['data']['customer']['email'])->get();
                $paymt = new deposits;
                $paymt->user_id = $user[0]->id;
                $paymt->usn = $user[0]->username;
                $paymt->amount = floatval(($paymentDetails['data']['amount'])/100) * env('CONVERSION');
                $paymt->currency = $st->currency;
                $paymt->account_name = $paymentDetails['data']['customer']['email'];
                $paymt->account_no = $paymentDetails['data']['id'];
                $paymt->bank = 'Paystack';
                $paymt->status = 1;
                $paymt->on_apr = 1;
                $paymt->pop = $paymentDetails['data']['reference'];
    
                $paymt->save();
                
                $user[0]->wallet += floatval(($paymentDetails['data']['amount'])/100) * env('CONVERSION');
                $user[0]->save();

                $maildata = ['email' => $user[0]->email, 'username' => $user[0]->username];

                Mail::send('mail.user_deposit_notification', ['md' => $maildata], function($msg) use ($maildata){
                    $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                    $msg->to($maildata['email']);
                    $msg->subject('User Deposit Notification');
                });

                Mail::send('mail.admin_deposit_notification', ['md' => $maildata], function($msg) use ($maildata){
                    $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                    $msg->to(env('SUPPORT_EMAIL'));
                    $msg->subject('User Deposit Notification');
                });
                
                return redirect()->route('wallet', $user[0]->username)->with([
                  'toast_msg' => 'Deposit successful!',
                  'toast_type' => 'suc'
                ]);
            }
            catch(\Exception $e)
            {
                return redirect()->route('paystack.index')->with([
                  'toast_msg' => 'Error crediting your account! '.$e->getMessage(),
                  'toast_type' => 'err'
                ]);
            }
        }
        else
        {
            return redirect()->route('paystack.index')->with([
              'toast_msg' => 'Deposit not successful!',
              'toast_type' => 'err'
            ]);
        }
    }

}