<?php ($adm_users = search_adm()); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php echo $__env->make('admin.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    <?php echo $__env->make('admin.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div id="prnt"></div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card_header_bg_blue">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title text-white"><?php echo e(__('Admin Users')); ?></h4>                                        
                                    </div>
                                    <p class="card-category text-white pl-2">
                                        <?php echo e(__('All admin users.')); ?>

                                    </p>
                                </div>
                                <div class="card-body">                    
                                    <div class="table-responsive">
                                        <?php echo $__env->make('admin.temp.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card_header_bg_blue">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title pl-2 text-white"><?php echo e(__('Add New users')); ?></h4>                                        
                                    </div>
                                    <p class="card-category text-white pl-2">
                                        <?php echo e(__('Create new admin users.')); ?>

                                    </p>
                                </div>
                                <div class="card-body">                    
                                    <div class="table-responsive">
                                        <?php echo $__env->make('admin.temp.add_new_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/admin/manage_adm.blade.php ENDPATH**/ ?>