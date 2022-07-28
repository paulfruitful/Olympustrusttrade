<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'Paypal Payment'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">                   
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"><?php echo e(__('Deposit Using Paystack')); ?></div>
                                        <div class="card-tools">                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row"> 
                                         
                                        <div class="col-md-7">
                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" id="" role="form" action="<?php echo e(route('paystack.post_amt')); ?>" >
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="email" value="<?php echo e($user->email); ?>">
                                                    <input type="hidden" name="orderID" value="<?php echo e($user->username.strtotime(date('Y-m-s H:i:s'))); ?>">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <input type="hidden" name="currency" value="NGN">
                                                    <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['Username' => $user->username])); ?>" > 
                                                    <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>">
                                                    <div class="form-group">
                                                        <label for="amount" class="col-md-4 control-label"><?php echo e(__('Enter Amount')); ?></label>
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><b><?php echo e($settings->currency); ?></b></span>
                                                                </div>
                                                                <input id="amount" type="number" class="form-control" name="amount" value="" required autofocus>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                <?php echo e(__('Pay Now')); ?>

                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5 " align="center">
                                            <br>
                                            <img src="https://website-v3-assets.s3.amazonaws.com/assets/img/hero/Paystack-mark-white-twitter.png" height="60px"></img>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\maxprofit\core\resources\views/user/paystack.blade.php ENDPATH**/ ?>