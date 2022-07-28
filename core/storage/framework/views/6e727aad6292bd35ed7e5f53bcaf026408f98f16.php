            <table class="display table table-stripped table-hover">
                <thead>
                    <tr>
                        <th> <?php echo e(__('Actions')); ?> </th>
                        <th> <?php echo e(__('Username')); ?> </th>
                        <th> <?php echo e(__('Amount')); ?> </th>                        
                        <th> <?php echo e(__('Amount Payable')); ?> </th>
                        <th> <?php echo e(__('Bank Details/Wallet')); ?> </th>
                        <th> <?php echo e(__('Date')); ?> </th>
                        <th> <?php echo e(__('Status')); ?> </th>                                                                              
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th> <?php echo e(__('Actions')); ?> </th>
                        <th> <?php echo e(__('Username')); ?> </th>
                        <th> <?php echo e(__('Amount')); ?> </th>                        
                        <th> <?php echo e(__('Amount Payable')); ?> </th>
                        <th> <?php echo e(__('Bank Details/Wallet')); ?> </th>
                        <th> <?php echo e(__('Date')); ?> </th>
                        <th> <?php echo e(__('Status')); ?> </th>                                                                              
                    </tr>
                </tfoot>
                <tbody>
                    
                    <?php if(count($wd) > 0 ): ?>
                        <?php $__currentLoopData = $wd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>                                                            
                                <td>
                                    <a title="Reject" href="/admin/reject/user/wd/<?php echo e($dep->id); ?>" > 
                                        <span class=""><i class="fa fa-ban text-warning" ></i></span>
                                    </a>                                    
                                    <?php if($adm->role == 3): ?>
                                        <a title="Approve" href="/admin/approve/user/wd/<?php echo e($dep->id); ?>" > 
                                            <span><i class="fa fa-check text-success"></i></span>
                                        </a>
                                        <a title="Delete" href="/admin/delete/user/wd/<?php echo e($dep->id); ?>" > 
                                            <span class=""><i class="fa fa-times text-danger"></i></span>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($dep->usn); ?></td>
                                <td><?php echo e($dep->currency); ?> <?php echo e($dep->amount); ?></td>                                
                                <td><b><?php echo e($dep->currency); ?> <?php echo e($dep->recieving); ?></b></td>     
                                <td><?php echo e($dep->account); ?></td>
                                <td><?php echo e(substr($dep->created_at, 0, 10)); ?></td>
                                <td><?php echo e($dep->status); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        
                    <?php endif; ?>
                </tbody>
            </table>
            <?php echo e($wd->links()); ?>


            <?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/admin/temp/user_withdrawal.blade.php ENDPATH**/ ?>