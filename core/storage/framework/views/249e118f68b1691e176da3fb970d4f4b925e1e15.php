<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'My Downlines'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    <?php echo $__env->make('user.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">                                            
                                            <?php echo e(__('Referral link:')); ?>

                                            <a href="/register/<?php echo e($user->username); ?>" class="text-danger" id="reflnk" >
                                                <small><?php echo e(env('APP_URL').__('/register/').$user->username); ?></small>
                                            </a>                                            
                                        </div>                                       
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('My Downlines')); ?></div>
                                </div>
                                <div class="card-body pb-5">
                                    <?php
                                        $ref_levels = App\ref_set::all();
                                        $rsum = 0;
                                    ?>                    
                                        <?php $__currentLoopData = $ref_levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref_level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $activities = App\ref::where('username', $user->username)->where('level', $ref_level->id)->orderby('id', 'asc')->get();
                                                // $rsum += $activities
                                            ?>
                                            
                                            <div class="table-responsive mt-5">                                        
                                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                            <th><?php echo e(__('Name')); ?></th>
                                                            <th><?php echo e(__('Username')); ?></th>
                                                            <th><?php echo e(__('Level')); ?></th>
                                                            <th><?php echo e(__('Amount Earned')); ?></th>
                                                            <th><?php echo e(__('Investment')); ?></th>
                                                            <th><?php echo e(__('Date Registered')); ?></th>   
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <?php if(count($activities) > 0 ): ?>
                                                            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php  
                                                                    $ref_d = App\User::find($activity->user_id);                
                                                                ?>
                                                                <tr>                                                            
                                                                    <td>
                                                                        <?php echo e($ref_d->firstname); ?> <?php echo e($ref_d->lastname); ?>

                                                                    </td>
                                                                    <td><?php echo e($ref_d->username); ?></td>
                                                                    <td><?php echo e($activity->level); ?></td>
                                                                    <td><?php echo e(env('CURRENCY').' '.$activity->amount); ?></td>
                                                                    <td>
                                                                        <?php  
                                                                            $ref_inv = App\investment::where('user_id', $activity->user_id)->get();
                                                                            echo count($ref_inv);
                                                                        ?>
                                                                    </td>                                                            
                                                                    <td><?php echo e(substr($ref_d->created_at,0,10)); ?></td>                     
                                                                </tr>
                                                                <?php ($rsum += $activity->amount); ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                            <tr>                                                    
                                                                <td colspan="4">No data</td>                     
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                            <th><?php echo e(__('Name')); ?></th>
                                                            <th><?php echo e(__('Username')); ?></th>
                                                            <th><?php echo e(__('Amount Earned')); ?></th>
                                                            <th><?php echo e(__('Investment')); ?></th>
                                                            <th><?php echo e(__('Date Registered')); ?></th>   
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <br><br>
                                            </div>
                                                       
                                                    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                   
                                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a02ccb19-e8b6-47a2-81c1-28c0afea0890";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/user/downlines.blade.php ENDPATH**/ ?>