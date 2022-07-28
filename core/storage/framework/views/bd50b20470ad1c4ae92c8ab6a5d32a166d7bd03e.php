          
<table id="" class=" table table-stripped table-hover">
    <thead>
        <tr>                
            <th> <?php echo e(__('Name')); ?> </th>
            <th> <?php echo e(__('Username')); ?> </th>
            <th> <?php echo e(__('Investment')); ?> </th>
            <th> <?php echo e(__('Date')); ?> </th>   
        </tr>
    </thead>
    <tbody>

        <?php
            $activities = App\User::where('referal', $user->username)->orderby('id', 'desc')->get();
        ?>
        <?php if(count($activities) > 0 ): ?>
            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                                                            
                    <td><?php echo e($activity->firstname); ?> <?php echo e($activity->lastname); ?></td>
                    <td><?php echo e($activity->username); ?></td>
                    <td>
                        <?php  
                            $ref_inv = App\investment::where('user_id', $activity->id)->get();
                            echo count($ref_inv);
                        ?>
                    </td>                                                            
                    <td><?php echo e($activity->created_at); ?></td>                     
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            
        <?php endif; ?>
    </tbody>
</table>
<?php /**PATH /home/overmvoo/fortunetradeinvest.com/core/resources/views/admin/temp/user_ref.blade.php ENDPATH**/ ?>