
<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content">
            <?php echo $__env->make('admin.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-inner mt--5">
                <?php echo $__env->make('admin.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div id="prnt"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card_header_bg_blue" >
                                <div class="card-head-row card-tools-still-right">
                                    <h4 class="card-title text-white" > <?php echo e(__('KYC Users')); ?> </h4>
                                    <div class="card-tools">
                                       <form action="/admin/search/user" method="post">
                                            <div class="input-group">
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <?php echo e(__('Search')); ?> </span>
                                                </div>
                                                <input type="text" name="search_val" class="form-control" placeholder="Search by Name, Username, email, phone and status">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <button class="fa fa-search btn"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                                                             
                                </div>
                                <?php
                                    if(Session::has('val'))
                                    {
                                        $kyc = search_user();
                                    }
                                ?>
                                <!-- <p class="card-category text-white" > <?php echo e(__('All registered users.')); ?> </p> -->
                            </div>
                            <div class="card-body">                                
                                <div class="table-responsive">
                                    <table id="" class="table  table-hover" >
                                        <thead>
                                            <tr>                                                                                                
                                                <th><?php echo e(__('Username')); ?></th>
                                                <th><?php echo e(__('Selfie')); ?></th>
                                                <th><?php echo e(__('Card Type')); ?></th>
                                                <th><?php echo e(__('Card Front')); ?></th>
                                                <th><?php echo e(__('Card Back')); ?></th>
                                                <th><?php echo e(__('Proof Of Address')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                                <th><?php echo e(__('Manage')); ?></th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            
                                            <?php if(count($kyc) > 0 ): ?>
                                                <?php $__currentLoopData = $kyc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($user->username); ?></td>                                                        
                                                        <td>
                                                            <a href="<?php echo e(env('APP_URL').'/img/kyc/'.$user->selfie); ?>" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>
                                                        </td> 
                                                        <td><?php echo e($user->card_type); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(env('APP_URL').'/img/kyc/'.$user->front_card); ?>" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>
                                                        </td>  
                                                        <td>
                                                            <?php if(!empty($user->back_card)): ?>
                                                            <a href="<?php echo e(env('APP_URL').'/img/kyc/'.$user->back_card); ?>" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>
                                                            <?php endif; ?>
                                                        <td>
                                                            <a href="<?php echo e(env('APP_URL').'/img/kyc/'.$user->address_proof); ?>" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>                                                            
                                                        </td>
                                                        <td>
                                                            <?php if($user->status == 1 ): ?>
                                                                <?php echo e(__('Verified')); ?>

                                                            <?php elseif($user->status == 0): ?>
                                                                <?php echo e(__('Pending')); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a title="Approve" href="<?php echo e(route('admin_kyc.approve_kyc', ['id' => $user->id])); ?>" class=" text-success">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                            <a title="Reject" href="<?php echo e(route('admin_kyc.reject_kyc', ['id' => $user->id])); ?>" class=" text-danger">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </td>                                     
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div class="" align="">
                                       <span> <?php echo e($kyc->links()); ?></span>  
                                    </div>
                                </div>
                                      

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overmvoo/fortunetradeinvest.com/core/resources/views/admin/kyc.blade.php ENDPATH**/ ?>