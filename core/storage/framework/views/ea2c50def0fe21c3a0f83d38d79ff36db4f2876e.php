<?php ($deps = search_deposit()); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php echo $__env->make('admin.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                   
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title col-sm-12"  ><?php echo e(__('Ticket Chat')); ?> 
                                            <!-- <span class="float-right"><a data-target="#open_ticket" data-toggle="modal" href="javascript:void(0)" class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i> Open Ticket</a></span> -->
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="card-body position_relative" >                                    
                                    <div class='p-2 text-center bg_white chat_msg'>
                                        <strong>Ticket Issue Messages</strong><br>
                                        <?php echo e($ticket_view->msg); ?>

                                    </div>                                    
                                    <div class="pl-3 pr-3 chat_container">                                        
                                        <div id="chat_msg_container" class=" pt-1 chat_msg_container pl-4 scroll" > 
                                            <?php if(!empty($ticket_view)): ?>
                                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($comment->sender == "user"): ?>
                                                        <div class="row col-sm-12">
                                                            <p class="mg_top_30">
                                                                <img src="/img/profile/<?php echo e($user->img); ?>" alt="..." class="avatar_chat rounded-circle">
                                                            </p>
                                                            <div class="talk-bubble tri-right left-top">
                                                              <div class="talktext">
                                                                <p>
                                                                    <?php echo e($comment->message); ?> 
                                                                </p>
                                                                <p class="font_10 float-right"><i><?php echo e($comment->created_at); ?></i></p>
                                                              </div>
                                                            </div>  
                                                            
                                                        </div> 
                                                    <?php else: ?>
                                                        <div class="row col-sm-12 d-flex justify-content-end">
                                                            <div class="talk-bubble tri-right right-top ">
                                                              <div class="talktext">
                                                                <p class="p-0">
                                                                    <?php echo e($comment->message); ?>

                                                                </p>
                                                                <small class="font_10 p-0"><i><?php echo e($comment->created_at); ?></i></small>
                                                              </div>
                                                            </div>
                                                            <p class="mg_top_30">
                                                               <img src="/img/logo.png" alt="..." class="avatar_chat rounded-circle">
                                                            </p>             
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-12 mt-5">
                                            <form id="comment_form" class="form-horizontal" method="POST" role="form" action="<?php echo e(route('support.comment')); ?>" >
                                                <div class="form-group <?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                                                    <div class="input-group"> 
                                                        <input id="ticket_id" type="hidden" class="form-control" name="ticket_id" value="<?php echo e($ticket_view->id); ?>" required autofocus>
                                                        <input id="msg_entry" type="text" class="form-control msg_entry" name="msg" autofocus placeholder="Your Message">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text btn_blue">
                                                                <button type="submit" onclick="post_comment('support')" class="btn btn_blue"><i class="fab fa-telegram-plane"></i></button>
                                                            </span>
                                                        </div>                   
                                                    </div>
                                                </div>                                            
                                                <div class="form-group">                                                                                
                                                     
                                                </div>
                                            </form>
                                            <audio id="buzzer" src="/sound/swiftly.mp3" type="audio/mp3"></audio> 
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
<script type="text/javascript">    
    $(document).ready(function(){
        var timeout = 5000;
        setInterval(function() {
            load_chat_adm();
            $("#chat_msg_container").animate({ scrollTop: $('#chat_msg_container')[0].scrollHeight }, 1000); 
        }, timeout);
        $("#chat_msg_container").animate({ scrollTop: $('#chat_msg_container')[0].scrollHeight }, 1000); 
    });                                                    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/admin/ticket_chat.blade.php ENDPATH**/ ?>