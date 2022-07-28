<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'Wallet'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    <?php echo $__env->make('user.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"><?php echo e(__('Deposit into your wallet')); ?></div>                                        
                                    </div>
                                </div>
                                <div class="card-body"> 
                                        <?php if($user->status == 2 || $user->status == 'Blocked'): ?>
                                            <div class="alert alert-warning">
                                                <p>
                                                   <?php echo e(__('Account Blocked or restricted! Please contact support for assistance. We apologize for any inconveniency.')); ?> 
                                                </p>
                                            </div>
                                        <?php elseif(empty($user->currency)): ?>
                                            <div class="alert alert-warning">
                                                <p>
                                                    <a href="/<?php echo e($user->username); ?>/profile#userdet">
                                                        <?php echo e(__('Please, update your profile before you proceed')); ?>

                                                    </a>
                                                </p>
                                            </div>
                                        <?php else: ?>
                                            <?php if($settings->deposit == 1): ?>      
                                                <div id="pay_cont" class="row">
                                                    <?php if(env('SWITCH_PAYPAL') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                        
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="fab fa-cc-paypal fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Paypal payment gateway')); ?>

                                                            </p>
                                                            <div align="">
                                                                <a href="<?php echo e(route('addmoney.paywithpaypal')); ?>" class="btn btn_blue" ><?php echo e(__('Pay with Paypal')); ?></a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if(env('SWITCH_STRIPE') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                                                  
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="fab fa-cc-stripe fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Stripe payment gateway')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('stripe.amount')); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with Stripe')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    <?php if(env('PM_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                   
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <img src="/img/pm.png" height="50px"></img> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Perfect Money')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('pm.index')); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with PM')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                   
                                                    <?php if(env('PAYEER_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                   
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <img src="/img/payeer.png" height="50px"></img> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Deposit with Payeer gateway')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('payeer.index')); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with Payeer')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    <?php if(env('SWITCH_BTC') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                   
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="fab fa-bitcoin fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Bitcoin (Coinpayment system)')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('btc.index', ['coin' => 'BTC'])); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with BTC')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    <?php if(env('COINBASE_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                    
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="fab fa-bitcoin fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Coinbase Crypto payment system')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('coinbase.index')); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with Coinbase')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    <?php if(env('SWITCH_ETH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                   
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="fab fa-ethereum fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Ethereum (Coinpayment system)')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('btc.index', ['coin' => 'ETH'])); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with ETH')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    <?php if(env('PAYSTACK_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                   
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <img src="https://website-v3-assets.s3.amazonaws.com/assets/img/hero/Paystack-mark-white-twitter.png" height="50px"></img> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using paystack')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('paystack.index')); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with Paystack')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    <?php if(env('BANK_DEPOSIT_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                    
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="far fa-building fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using Bank Deposit/Transfer')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a id="pay_with_bank_dep" href="javascript:void(0)" class="btn btn_blue" >
                                                                    <?php echo e(__('Deposit with Bank')); ?>

                                                                </a>
                                                            </div> 
                                                            <div id="bank_dets" align="" class="cont_display_none">
                                                                <div class="row mt-5 border border-primary rounded">              
                                                                    <div class="col-sm-12">
                                                                        <h3 class="color_blue_b">
                                                                            <i class="fas fa-money-check-alt color_blue_9"></i> <?php echo e(env('ACCOUNT_NAME')); ?>

                                                                        </h3>
                                                                        <h4 class="text-danger">Account Number: <?php echo e(env('ACCOUNT_NUMBER')); ?></h4>
                                                                        <h5 class="">Bank: <?php echo e(env('BANK_NAME')); ?></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row">              
                                                                    <div class="col-sm-12">
                                                                        <p class="text-danger">
                                                                           <?php echo e(__('Make payment to the above bank account information and click continue below.')); ?> 
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">              
                                                                    <div class="col-sm-12">
                                                                        <a id="bank_deposit_cont" href="javascript:void(0)" class="btn btn_blue" >
                                                                            <?php echo e(__('Continue')); ?>

                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>                                                                                               
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>


                                                </div>                                                   
                                            <?php else: ?>
                                                <div class="row">
                                                    <div class="col-lg-12">                                                                       
                                                        <div class="payment_method">
                                                            <p align="Center">
                                                               <i class="fa fa-alert"></i> <?php echo e(__('Deposit is disabbled')); ?> 
                                                            </p>                              
                                                        </div>                                                       
                                                    </div>
                                                </div>      
                                            <?php endif; ?>                                         

                                        <?php endif; ?>

                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('Deposit History')); ?></div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php
                                        $deps = App\deposits::where('user_id', $user->id)->orderby('id', 'desc')->paginate(10);
                                    ?>                                                   
                                                
                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>  
                                                <th><?php echo e(__('Amount')); ?></th>        
                                                <th><?php echo e(__('Method')); ?></th>
                                                <th><?php echo e(__('Account')); ?></th>
                                                <th><?php echo e(__('ID')); ?></th>
                                                <th><?php echo e(__('Date')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                                <th><?php echo e(__('Url')); ?></th>                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if(count($deps) > 0 ): ?>
                                                <?php $__currentLoopData = $deps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr> 
                                                        <td><?php echo e($settings->currency); ?> <?php echo e($dep->amount); ?></td>     
                                                        <td><?php echo e($dep->bank); ?></td>
                                                        <td>
                                                           <?php echo e($dep->account_no); ?>

                                                        </td>
                                                        <td>
                                                           <?php echo e($dep->account_name); ?>

                                                        </td>
                                                        <td><?php echo e($dep->created_at); ?></td>
                                                        <td>
                                                            <?php if($dep->status == 0): ?>
                                                                Pending
                                                            <?php elseif($dep->status == 1): ?>
                                                                Approved
                                                            <?php elseif($dep->status == 2): ?>
                                                                Rejected
                                                            <?php endif; ?>
                                                        </td> 
                                                        <td>
                                                            <?php if($dep->bank == 'BTC'): ?>
                                                                <?php if($dep->account_name == 'Coin Base'): ?>
                                                                    <a href="<?php echo e(route('coinbase.confirm', ['id' => $dep->pop])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php else: ?>
                                                                    <a href="<?php echo e(route('btc.confirm', ['id' => $dep->account_name])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>                                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>                                                            
                                                    <td colspan="6"><?php echo e(__('No data')); ?></td>                                        
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div>
                                        <?php echo e($deps->links()); ?>

                                    </div>           
                                    <br><br>  
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="dep_pop" class="container dep_pop">
                <div class="row pad_5p2p">
                    <div class="col-md-4">&emps;</div>
                    <div class="col-md-4 pop_cont" align="Center">   
                        <div class="">                        
                                <span>            
                                  <a id="dep_pop_close" href="javascript:void(0)" class="btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                                </span>
                                <br>
                            </div>
                            <div>
                                <img id="img_pop" src="" class="pop_img_h">
                            </div>
                            <br>
                        </div>  
                        <!-- close btn -->
                        <script type="text/javascript">
                          $('#dep_pop_close').click( function(){
                            $('#dep_pop').hide();
                          });        
                        </script>
                        <!-- end close btn -->
                    </div>
                </div>
            </div>

            <div id="bank_deposit_cont_dets" class="container popmsgContainer" >
                <div class="row">
                  <div class="col-md-4">&emps;</div>
                  <div class="col-md-4 popmsg-mobile card" align="Center">        
                    <div class="mt-2">
                      <h3><b><?php echo e(__('Deposit Details')); ?></b></h3>                              
                      <hr>
                    </div>
                    <div class="">                        
                        <form action="/user/wallet/bank_deposit" method="post">
                            <div class="form-group" align="left">                       
                                <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><?php echo e($settings->currency); ?></span>
                                </div>                        
                                <input type="number" class="form-control" name="amt"  required placeholder="Enter Amount deposited" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group" >                   
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><i class="fa fa-user" ></i></span>
                                </div>
                                <input type="text" class="form-control" name="account_name"  required placeholder="Account name sent from" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group" >                   
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><i class="fa fa-home" ></i></span>
                                </div>
                                <input type="text" class="form-control" name="account_no"  required placeholder="Account number sent from" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group" >                   
                                <div class="input-group-prepend" >
                                  <span class="input-group-text span_bg"><i class="fa fa-home" ></i></span>
                                </div>
                                <input type="text" class="form-control" name="bank_name"  required placeholder="Bank name sent from" >
                              </div>
                            </div>
                            <div class="form-group">
                              <br>
                                <button class="collb btn btn-info"><?php echo e(__('Proceed')); ?></button>
                                <span style="">            
                                  <a id="bank_deposit_cont_dets_close" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                                </span>
                                <br>
                            </div>
                        </form>
                    </div>  
                    <!-- close btn -->
                    <script type="text/javascript">
                      $('#bank_deposit_cont_dets_close').click( function(){
                        $('#bank_deposit_cont_dets').hide();
                      });        
                    </script>
                    <!-- end close btn -->
                  </div>

                </div>
            </div>            
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\maxprofit\core\resources\views/user/load_wallet.blade.php ENDPATH**/ ?>