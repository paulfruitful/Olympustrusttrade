<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Investment Notification</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <div align="">
                <img src="<?php echo e(env('APP_URL')); ?>/img/<?php echo e($st->site_logo); ?>" style="height:100px; width:100px;" align="center">
            </div>
            <h3 align="">Investment Notification</h3>
            <p>
               Hi Admin, <b><?php echo e($md['username']); ?></b> has just invested on <?php echo e(env('APP_URL')); ?>.
               <br>
               Kindly attend to this transaction.               
            </p>
            <p>
                <i class="fa fa-certificate"><?php echo e(env('APP_NAME')); ?> Investment.
            </p>
        </div>
    </div>
    
</body>
</html><?php /**PATH C:\wamp64\www\maxprofit\core\resources\views/mail/admin_inv_notification.blade.php ENDPATH**/ ?>