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
                                    <h4 class="card-title text-white" > <?php echo e(__('All Users')); ?> </h4>
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
                                <?php ($users_table = search_users()); ?>                               
                                <p class="card-category text-white" > <?php echo e(__('All registered users.')); ?> </p>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="" class="table  table-hover" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-eye"></i></th>
                                                <th><?php echo e(__('Name')); ?></th>
                                                <th><?php echo e(__('Username')); ?></th>
                                                <th><?php echo e(__('Email')); ?></th>
                                                <th><?php echo e(__('Phone')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><i class="fa fa-eye"></i></th>
                                                <th><?php echo e(__('Name')); ?></th>
                                                <th><?php echo e(__('Username')); ?></th>
                                                <th><?php echo e(__('Email')); ?></th>
                                                <th><?php echo e(__('Phone')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            <?php if(count($users_table) > 0 ): ?>
                                                <?php $__currentLoopData = $users_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-info" href="/admin/view/userdetails/<?php echo e($user->id); ?>" title="View user details">
                                                                <i class="fa fa-eye"> VIEW</i>
                                                            </a>
                                                        </td>
                                                        <td><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
                                                        <td><?php echo e($user->username); ?></td>
                                                        <td><?php echo e($user->email); ?></td>  
                                                        <td><?php echo e($user->phone); ?></td>
                                                        <td>
                                                            <?php if($user->status == 1 || $user->status == 'Active'): ?>
                                                                <?php echo e('Active'); ?>

                                                             <?php elseif($user->status == 0 || $user->status == 'Not Active'): ?>
                                                             <?php echo e('Not Active'); ?>

                                                             <?php else: ?>
                                                             <?php echo e('Blocked'); ?>

                                                            <?php endif; ?>
                                                        </td>                                     
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div class="" align="">
                                       <span> <?php echo e($users_table->links()); ?></span>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/admin/manage_users.blade.php ENDPATH**/ ?>