
         
    <table id="" class=" table table-stripped table-hover">
        <thead>
            <tr>               
                <th> <?php echo e(__('Account')); ?> </th>
                <th> <?php echo e(__('Amount')); ?> </th>                
                <th> <?php echo e(__('Date')); ?> </th>                                                    
            </tr>
        </thead>
        <tbody>
            <?php
                $activities = App\Withdrawal::where('user_id', $user->id)->orderby('id', 'desc')->get();
            ?>
            <?php if(count($activities) > 0 ): ?>
                <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                        <td><?php echo e($activity->account); ?></td>
                        <td><?php echo e($activity->amount); ?></td>
                        <td><?php echo e($activity->created_at); ?></td>                     
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                
            <?php endif; ?>
        </tbody>
    </table>
<?php /**PATH /home/overmvoo/fortunetradeinvest.com/core/resources/views/admin/temp/user_wd_history.blade.php ENDPATH**/ ?>