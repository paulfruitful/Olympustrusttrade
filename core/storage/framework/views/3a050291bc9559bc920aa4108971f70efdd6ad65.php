<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'Support'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">                    
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title col-sm-12"  ><?php echo e(__('Ticket Chat')); ?>                                             
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="card-body position_relative" >                                    
                                    <div class='p-2 text-center bg_white chat_msg'>
                                        <strong>Ticket Issue Messages</strong><br>
                                        <?php echo e($ticket_view->msg); ?>

                                    </div>                                    
                                    <div class="pl-3 pr-3 chat_container">                                        
                                        <div id="chat_msg_container" class=" pt-1 chat_msg_container scroll scrollbar-inner "> 
                                            <?php if(!empty($ticket_view)): ?>
                                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($comment->sender == "user"): ?>

                                                        <div class="row col-sm-12 d-flex justify-content-end">  
                                                            <div class="talk-bubble tri-right right-top">
                                                              <div class="talktext">
                                                                <p>
                                                                    <?php echo e($comment->message); ?> 
                                                                </p>
                                                                <p class="font_10 float-left"><i><?php echo e($comment->created_at); ?></i></p>
                                                              </div>
                                                            </div>  
                                                            <p class="mg_top_30">
                                                                <img src="/img/profile/<?php echo e($user->img); ?>" alt="..." class="avatar_chat rounded-circle">
                                                            </p>                                                                      
                                                        </div>                                                       
                                                    <?php else: ?>
                                                        <div class="row col-sm-12">
                                                            <p class="mg_top_30">
                                                               <img src="/img/logo.png" alt="..." class="avatar_chat rounded-circle">
                                                            </p>
                                                            <div class="talk-bubble tri-right left-top">
                                                              <div class="talktext">
                                                                <p class="p-0">
                                                                    <?php echo e($comment->message); ?>

                                                                </p>
                                                                <small class="font_10 p-0 float-right"><i><?php echo e($comment->created_at); ?></i></small>
                                                              </div>
                                                            </div>              
                                                        </div> 
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-12 mt-5">
                                            <form id="comment_form" class="form-horizontal" method="POST" role="form" action="<?php echo e(route('ticket.comment')); ?>" >
                                                <div class="form-group <?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                                                    <div class="input-group"> 
                                                        <input id="ticket_id" type="hidden" class="form-control" name="ticket_id" value="<?php echo e($ticket_view->id); ?>" required autofocus>
                                                        <input type="text" id="msg_entry" class="form-control msg_entry" name="msg" autofocus placeholder="Your Message">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text btn_blue">
                                                                <button type="submit" class="btn btn_blue" onclick="post_comment('user')"><i class="fab fa-telegram-plane"></i></button>
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

            <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Modal -->
            <div class="modal fade" id="open_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Open a new ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="text-danger">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" method="POST" role="form" action="<?php echo e(route('ticket.create')); ?>" >
                        <?php echo csrf_field(); ?>
                        <div class="form-group <?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                            <label class="control-label"><?php echo e(__('Title')); ?></label>                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" name="title" value="" required autofocus>                    
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label"><?php echo e(__('Message')); ?></label>                            
                            <div class="input-group">                               
                                <textarea name="msg" class="form-control" required></textarea>                                                   
                            </div>
                        </div>
                        <div class="form-group">                                                                                                           
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>  
                        </div>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>

<script type="text/javascript">    
    $(document).ready(function(){
        var timeout = 5000;
        setInterval(function() {
            load_chat();  
            $("#chat_msg_container").animate({ scrollTop: $('#chat_msg_container')[0].scrollHeight }, 1000);           
        }, timeout);
    }); 
    $("#chat_msg_container").animate({ scrollTop: $('#chat_msg_container')[0].scrollHeight }, 1000);                                                   
</script>

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/user/ticket_chat.blade.php ENDPATH**/ ?>