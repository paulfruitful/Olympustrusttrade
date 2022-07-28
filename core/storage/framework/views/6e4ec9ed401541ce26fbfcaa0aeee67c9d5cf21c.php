                
<div class="alert alert-info inv_alert_cont" >
    <div class="row inv_alert_top_row">
        <div class="col-xs-12 pad_top_5" align="center" >
            <h4 class="u_case"><?php echo e(__('Amount')); ?>Package: <?php echo e($in->package); ?></h4>
           
        </div>
    </div> 
    <div class="row color_blue_9">
        <div class="col-xs-6">
            <?php echo e(__('Capital:')); ?>

        </div>
        <div class="col-xs-6">
            <?php echo e(($settings->currency)); ?> <?php echo e($in->capital); ?>

        </div>
    </div> 
    <div class="row" style="">
        <div class="col-xs-6">
            <?php echo e(__('Return:')); ?>

        </div>
        <div class="col-xs-6">
            <?php echo e(($settings->currency)); ?> <?php echo e($in->i_return); ?>

        </div>
    </div>  
    <div class="row" style="">
        <div class="col-xs-6">
            <?php echo e(__('Started:')); ?>

        </div>
        <div class="col-xs-6">
            <?php echo e($in->date_invested); ?>

        </div>
    </div> 
    <div class="row" style="">
        <div class="col-xs-6">
            <?php echo e(__('Ending:')); ?>

        </div>
        <div class="col-xs-6">
            <?php echo e($in->end_date); ?>

        </div>
    </div>
    <div class="row" style="">
        <div class="col-xs-6">
            <?php echo e(__('Days:')); ?>

        </div>
        <div class="col-xs-6">
            <?php echo e($totalDays); ?>

        </div>
    </div>
    <div class="row" style="">
        <div class="col-xs-6">
           <?php echo e(__('Withdrawn:')); ?> 
        </div>
        <div class="col-xs-6">
            <?php echo e(($settings->currency)); ?> <?php echo e($in->w_amt); ?>

        </div>
    </div> 
    <div class="row" style="">
        <div class="col-xs-6">
            <?php echo e(__('Status:')); ?>

        </div>
        <div class="col-xs-6">
            <?php echo e($in->status); ?>

        </div>
    </div> 
    <div class="row" style="" align="center">
        <br>
        <div class="col-xs-12" align="center">
            <a title="Withdraw" href="javascript:void(0)" class="btn btn-info" onclick="wd('pack', '<?php echo e($in->id); ?>', '<?php echo e($ern); ?>', '<?php echo e($withdrawable); ?>', '<?php echo e($Edays); ?>', '<?php echo e($ended); ?>')">
                <?php echo e($settings->currency); ?> <?php echo e($ern); ?>

            </a>
        </div>
        <?php echo e(__('Click to withdraw')); ?>

    </div>                                                                     
</div>
        
<?php /**PATH C:\wamp64\www\maxprofit\core\resources\views/user/inc/mob_inv.blade.php ENDPATH**/ ?>