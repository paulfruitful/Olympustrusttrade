
<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php echo $__env->make('admin.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5"> 
                    <div class="row mt--2">
                        <div class="col-md-6">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-title"> <?php echo e(__('Profile')); ?> </div>  
                                    <hr>                                 
                                    <div class="row">
                                        <div class="col-4">
                                            <?php if($adm->img == ""): ?>
                                                <img src="/img/adminAvatar/any.png" alt="avatar" class="admin_usr_img_size">
                                            <?php else: ?>
                                                <img src="/img/adminAvatar/<?php echo e($adm->img); ?>" alt="avatar" class="admin_usr_img_size">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-4"><h5><b> <?php echo e(__('Name:')); ?> </b></h5></div>
                                                <div class="col-8"><?php echo e($adm->name); ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4"><h5><b> <?php echo e(__('Email:')); ?> </b></h5></div>
                                                <div class="col-8"><?php echo e($adm->email); ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12"><h6><b> <?php echo e(__('Level:')); ?> </b> <?php echo e($adm->role); ?> &emsp;|&emsp; <b> <?php echo e(__('status:')); ?> </b> <?php echo e(($adm->status == 1) ? 'Active' : 'Paused'); ?></h6></div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12"><h6><b> <?php echo e(__('Created on:')); ?> </b> <?php echo e($adm->created_at); ?> </h6></div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card full-height">
                                <div class="card-body" style="">
                                    <div id="circles-admLevel" align="center"></div><br>
                                    <h5 align="center"> <?php echo e(__('Account Level')); ?> </h5>             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"> <?php echo e(__('Change Password (Disabled on Demo)')); ?> </div>                                       
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/change/pwd" method="post">
                                        <input id="token" type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                                          
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " ><i class="fa fa-key"></i></span>
                                            </div>
                                              <input type="Password" class="form-control" name="oldpwd" placeholder="Old Password" required>
                                          </div>
                                          <br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text "><i class="fa fa-key"></i></span>
                                            </div>
                                              <input id="" type="password" class="form-control" name="newpwd" placeholder="New Password" required>
                                        </div>
                                          <br>
                                        <div class="input-group"> 
                                            <div class="input-group-prepend">               
                                              <span class="input-group-text "><i class="fa fa-key"></i></span>
                                            </div>
                                              <input id="" type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                                        </div>
                                          <br>
                                          
                                        <div class="form-group">
                                            <br>
                                              <button class="collb btn btn-info" disabled> <?php echo e(__('Update Password')); ?> </button>
                                              <br>
                                        </div>                                          
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/admin/profile.blade.php ENDPATH**/ ?>