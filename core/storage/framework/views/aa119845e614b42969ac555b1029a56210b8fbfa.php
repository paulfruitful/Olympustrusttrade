<title>Password Reset - </title>
<?php $__env->startSection('content'); ?>

<body>
    <div>
        <img src="/img/adult.jpg" class="fixedOverlayIMG">         
        <div class="fixedOeverlayBG"></div>
        <div class="container">
            <div class="row ">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-5 card">
                    <div class="card">
                        <div class="card-header">
                            <div align="center">
                                <img src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>" class="login_logo"> 
                                <br>
                                <?php echo e(__('Reset Password')); ?>

                                
                            </div>
                        
                        </div>
                        <div class="card-body">                            
                                <?php if(Session::has('msgType') && Session::get('msgType') == 'err'): ?>                                
                                    <div class="alert alert-danger">
                                        <?php echo e(Session::get('status')); ?>

                                    </div>
                                    <?php echo e(Session::forget('msgType')); ?>

                                    <?php echo e(Session::forget('status')); ?>

                                     
                                <?php endif; ?>
                           
                                <?php if(Session::has('pwd_rst_suc')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(Session::get('status')); ?>

                                    </div>
                                    <?php echo e(Session::forget('msgType')); ?>

                                    <?php echo e(Session::forget('status')); ?>

                                    <?php echo e(Session::forget('pwd_rst_suc')); ?>

                                    
                                <?php elseif(Session::has('pwd_reset_err')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo e(Session::get('pwd_reset_err')); ?>

                                    </div>
                                    <?php echo e(Session::forget('pwd_reset_err')); ?>

                                    <br><br><br>
                                <?php else: ?>
                                    <form method="POST" action="/user/update/pwd">
                                    <?php echo csrf_field(); ?>                                    
                                    <div class="form-group row">
                                            <div class="col-md-12">
                                            <label for="password" class=" col-form-label text-md-right"><?php echo e(__('New Password')); ?></label>
                                            <input id="password" type="password" class="regTxtBox <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
    
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
    
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="password-confirm" class=" col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                                            <input id="password-confirm" type="password" class="regTxtBox" name="c_pwd" required autocomplete="new-password">
                                        </div>
                                    </div>
    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12" align="center">
                                            <button type="submit" class="btn btn-primary collc">
                                                <?php echo e(__('Reset Password')); ?>

                                            </button>
                                        </div>
                                        <br><br>
                                    </div>
                                </form>
                                    
                                <?php endif; ?>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12" align="center">
                                        <a href="/login">
                                            <i class="fa fa-arrow-left"></i> <?php echo e(__('Back to Login')); ?>

                                        </a>
                                    </div>
                                    <br><br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>