@php($user_data = user_details_data($id))
@php($user = $user_data['user'])
@php($dt = $user_data['dt'])
@extends('admin.atlantis.layout')
@Section('content')
        <div class="main-panel">
            <div class="content">
                @include('admin.atlantis.main_bar')
                <div class="page-inner mt--5">
                    @include('admin.atlantis.overview')
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card_header_bg_blue" >
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title text-white"> {{ __('User Details') }} </h4>
                                        <div class="card-tools">
                                            <a href="/admin/block/user/{{$user->id}}" > 
                                                <span class=""><i class="fa fa-ban btn btn-warning" ></i></span>
                                            </a>
                                            <a href="/admin/activate/user/{{$user->id}}" > 
                                                <span><i class="fa fa-check btn btn-success"></i></span>
                                            </a>
                                            @if($adm->role != 1)
                                                <a href="/admin/delete/user/{{$user->id}}" > 
                                                    <span class=""><i class="fa fa-times btn btn-danger"></i></span>
                                                </a>
                                            @endif
                                        </div>                                                                             
                                    </div>
                                </div>
                                <div class="card-body">                                    
                                    <div class="row pad_top_20">
                                        <div class="col-lg-6">
                                            <div class="form-group" align="center">
                                                @if($user->img == "")
                                                    <img class="img-responsive" src="/img/any.png" width="200px" height="200px">
                                                @else
                                                    <img class="img-responsive" src="/img/profile/{{ $user->img }}" width="200px" height="200px">
                                                @endif
                                            </div>
                                        </div>  
                                        <div class="col-lg-6">
                                            <div class="card full-height">
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <h2 class="text-success"> {{ __('Account Summary') }} </h2>
                                                    </div>
                                                    <hr>
                                                    <div class="row py-3 @if($adm->role < 2) {{blur_cnt}}@endif position_relative">
                                                        <div class="col-md-6 d-flex flex-column justify-content-around">
                                                            <div class="border_btm_1">
                                                                <h4 class="fw-bold  text-info op-8"> {{ __('Wallet Balance') }} </h4>
                                                                <h3 class="fw-bold">{{$settings->currency}} {{ round($user->wallet,2) }}</h3>
                                                                <div class="colhd margin_top_n10 font_10">&emsp;</div>
                                                            </div>                      
                                                          <div class="clearfix"><br></div>                      
                                                            <div>                           
                                                                <h4 class="fw-bold text-info op-8"> {{ __('Referral Bonus') }} </h4>
                                                                <h3 class="fw-bold">{{$settings->currency}} {{ round ($user->ref_bal, 2)}}</h3>
                                                                <div class="colhd margin_top_n10 font_10 ">&emsp;</div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="border_btm_1" >
                                                                <h4 class="fw-bold text-info op-8"> {{ __('Date Created') }} </h4>
                                                                {{$dt->format('Y-m-d')}}
                                                                <div class="colhd margin_top_n10 font_10">&emsp;</div> 
                                                                <br>    
                                                            </div>
                                                            <div class="clearfix"><br></div> 
                                                            <div>
                                                                <h4 class="fw-bold text-info op-8"> {{ __('Status') }} </h4>       
                                                                <span class="fa fa-circle" style="color: green;"></span>
                                                                <span class="">
                                                                @if($user->status == 1 || $user->status == 'Active') 
                                                                    Active
                                                                @elseif($user->status == 2 || $user->status == 'Blocked') 
                                                                    Blocked
                                                                @elseif($user->status == 0 || $user->status == 'Inactive') 
                                                                    Not Active
                                                                @endif
                                                                </span> 
                                                               
                                                                <div class="colhd margin_top_n10 font_10" >&emsp;</div> 
                                                                <br>    
                                                            </div>

                                                        </div>

                                                    </div>             
                                                </div>
                                            </div>                                            
                                            
                                        </div>                               
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> {{ __('First Name') }} </label>
                                                <input id="adr" type="text" value="{{ucfirst($user->firstname)}}" class="form-control" name="fname" readonly>
                                            </div>
                                        </div>  
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> {{ __('Last Name') }} </label>
                                                <input id="adr" type="text" value="{{ucfirst($user->lastname)}}" class="form-control" name="lname" readonly>
                                            </div>
                                        </div>                               
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> {{ __('Email Address') }} </label>
                                                <div class="input-group">                                                       
                                                    <input id="email" type="email" value="{{$user->email}}" class="form-control" name="email">
                                                </div>
                                                
                                            </div>
                                        </div>     

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> {{ __('Username') }} </label>
                                                <div class="input-group">                                                       
                                                    <input id="usn" type="text" value="{{$user->username}}" class="form-control" name="usn" readonly>
                                                </div>
                                                
                                            </div>
                                        </div>                                             
                                        
                                    </div>   

                                    <form class="" method="post" action="/admin/update/user/profile">
                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="uid" value="{{$user->id}}">
                                                    <label> {{ __('Country') }} </label>
                                                    <select id="country" class="form-control" name="country" >
                                                        <?php 
                                                            $country = App\country::orderby('name', 'asc')->get();
                                                        ?>
                                                        @php($phn_code = '')
                                                        @foreach($country as $c)                                                           
                                                            @if($c->id == $user->country)
                                                                @php($cs = $c->id)
                                                                @php($phn_code = $c->phonecode)
                                                                {{'selected'}}
                                                                <option selected  value="{{$c->id}}">{{$c->name}}</option>
                                                             
                                                            @else
                                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                                            @endif
                                                        @endforeach
                                                        @if(!isset($cs))
                                                                <option selected disabled>Select Country</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <label> {{ __('State/Province') }} </label>
                                                    <select  id="states" class="form-control" name="state" required>
                                                        @if(isset($cs))
                                                            <?php 
                                                                $st = App\states::where('id', $user->state)->get();
                                                            ?>
                                                            @if(count($st) > 0)
                                                                <option selected value="{{$st[0]->id}}">{{$st[0]->name}}</option>
                                                            @else
                                                                <option selected disabled>Select State</option>
                                                            @endif
                                                            
                                                        @else
                                                           <option selected disabled>Select State</option>
                                                        @endif                                                           
                                                    </select>                                                        
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label> {{ __('Address') }} </label>
                                                    <input id="adr" type="text" class="form-control" value="{{$user->address}}" name="adr" required>
                                                </div>
                                            </div>  

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label> {{ __('Phone') }} </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span id="countryCode" class="input-group-text">
                                                                @if(isset($phn_code))
                                                                    {{'+'.$phn_code}}
                                                                @else
                                                                    +1
                                                                @endif
                                                            </span>
                                                        </div>                                                        
                                                        <input id="cCode" type="hidden" class="form-control" name="cCode" required>
                                                        <input id="phone" type="text" class="form-control" value="{{str_replace('+'.$phn_code,'',$user->phone)}}" name="phone" required>
                                                    </div>
                                                    
                                                </div>
                                            </div>                                             
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label >{{_('User Wallet Address')}}</label>
                                                    <input type="text" id="New_wallet" class="form-control" value="{{$user->bank->Account_number}}">
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                       <button class="collb btn btn-info"> {{ __('Save') }} </button>
                                                </div>
                                            </div>              
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> {{ __('Reset User Password') }} </div>
                                </div>
                                <div class="card-body pb-0">
                                    <form class="" method="post" action="/admin/change/user/pwd">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="uid" value="{{$user->id}}">
                                        <div class="form-group">
                                            <label> {{ __('New Password') }} </label>
                                            <input type="password" class="form-control" name="newpwd" placeholder="New Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label> {{ __('Confirm Password') }} </label>
                                            <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                                        </div>
                                            <div class="form-group" align="left">
                                               <button class="collb btn btn-info"> {{ __('Save Password') }} </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> {{ __('User Investment') }} </div>
                                </div>
                                <div class="card-body pb-0">
                                    @include('admin.temp.user_inv')
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> {{ __('Withdrawal History') }} </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    @include('admin.temp.user_wd_history')
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> {{ __('Referrals') }} </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    @include('admin.temp.user_ref')
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> {{ __('Bank Accounts') }} </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    <table  id="" class="display table table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <th> {{ __('Bank Name') }} </th>
                                                <th> {{ __('Acount Number') }} </th>
                                                <th> {{ __('Acount Name') }} </th>
                                                <th> {{ __('Actions') }} </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th> {{ __('Bank Name') }} </th>
                                                <th> {{ __('Acount Number') }} </th>
                                                <th> {{ __('Acount Name') }} </th>
                                                <th> {{ __('Actions') }} </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                 $mybanks = App\banks::where('user_id', $user->id)->get();
                                            ?>
                                            @if(count($mybanks) > 0)
                                                @foreach($mybanks as $bank)
                                                    <tr>
                                                        <td>{{$bank->Bank_Name}}</td>
                                                        <td>{{$bank->Account_name}}</td>
                                                        <td>{{$bank->Account_number}}</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    <br><br>
                                </div>
                            </div>
                        </div>                        
                    </div>         
                    
                </div>
            </div>
@endSection
            