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
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"> <?php echo e(__('Overall Statistics')); ?> </div>
                                        <div class="card-tools">                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container <?php if($adm->role < 2): ?> <?php echo e(blur_cnt); ?><?php endif; ?>" >
                                        <canvas id="adminStatisticsChart2"></canvas>
                                    </div>
                                    <div id="adminMyChartLegend2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-primary <?php if($adm->role < 2): ?> <?php echo e(blur_cnt); ?><?php endif; ?>">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('Withdrawal Stats')); ?> </div>                                    
                                </div>
                                <div class="card-body pb-0">                                    
                                    <div class="pull-in">
                                        <canvas id="wd_stats"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-logs"></div>
                                        <h6 class="fw-bold mt-3 mb-0"> <?php echo e(__('Activities')); ?> </h6>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('Monthly Breakdown')); ?> </div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php echo $__env->make('admin.temp.monthly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-card-no-pd">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title"> <?php echo e(__('User Activities')); ?> </h4>                                        
                                    </div>
                                    <p class="card-category">
                                        <?php echo e(__('All actions performed users.')); ?> 
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">                                              
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="basic-datatables" class="display table table-stripped 
                                                        table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th> <?php echo e(__('Admin')); ?> </th>
                                                                    <th> <?php echo e(__('Actions')); ?> </th>
                                                                    <th> <?php echo e(__('Date')); ?> </th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th> <?php echo e(__('Admin')); ?> </th>
                                                                    <th> <?php echo e(__('Actions')); ?> </th>
                                                                    <th> <?php echo e(__('Date')); ?> </th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo e($log->admin); ?>

                                                                        </td>
                                                                        <td>
                                                                            <?php echo e($log->action); ?>

                                                                        </td>
                                                                        <td><?php echo e($log->created_at); ?></td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                             
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hosthikr/test.hostmeng.com.ng/core/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>