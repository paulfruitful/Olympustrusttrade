<?php $__env->startSection('content'); ?>
<body>
    <div style="">
        <img src="/img/adult.jpg" class="fixedOverlayIMG">         
        <div class="fixedOeverlayBG"></div>
        <div class="">
            <div class="row admin_login_row">
                <div class="col-md-6 position_relative" >
                    <div class="admin_login_title" align="center">
                        <img src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>" class="login_logo">
                        <h1><?php echo e($settings->site_title); ?></h1> 
                        <p>                                                       
                            <h4> <?php echo e(__('Login to manage website')); ?> </h4>
                        </p>
                    </div>                    
                </div>
                <div class="col-md-6 bg_white">
                    <div class="login_fixed_panel">
                        <div class="row">
                            <div class="col-md-12" >
                                <div style="">                        
                                    <div class="panel" align="center">
                                        <img src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>" class="login_logo">
                                        <br><br>
                                        <h4 align="center"> <?php echo e(__('Admin Login')); ?> </h4> 
                                        <div id="errMsg" class="card-header alert alert-danger cont_display_none" align="center">         
                                        </div>

                                        <?php if(Session::has('err2') ): ?>         
                                            <script type="text/javascript">            
                                                $('#errMsg').html("<?php echo e(Session::get('err2')); ?>");
                                                $('#errMsg').show();
                                            </script>
                                            <?php echo e(Session::forget('err2')); ?>

                                        <?php endif; ?>

                                        <div class="panel-body" style="">
                                            <form method="POST" action="/dhadmin/login">                        
                                                <input id="csrf" type="hidden"  name="_token" value="<?php echo e(csrf_token()); ?>" >
                                                <div class="form-group row">
                                                    <label for="email" class=" col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                                                    <div class="input-group">
                                                        <input id="" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" class="form-control">
                                                        <div class="input-group-prepend bg_ash">
                                                            <span class="input-group-text"><i class="fa fa-envelope "></i></span>
                                                        </div>
                                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">

                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback text-danger" role="alert" >
                                                                <?php echo e($message); ?>

                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class=" col-form-label text-md-right"><?php echo e(__('Admin Password')); ?></label>

                                                    <div class="input-group">
                                                        <div class="input-group-prepend bg_ash">
                                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                        </div>
                                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback text-danger" role="alert" >
                                                                <?php echo e($message); ?>

                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="" align="center">
                                                        <button type="submit" class="btn btn-primary">
                                                            <?php echo e(__('Login')); ?>

                                                        </button>                               
                                                    </div>                            
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hosthikr/test.hostmeng.com.ng/core/resources/views/admin/login.blade.php ENDPATH**/ ?>