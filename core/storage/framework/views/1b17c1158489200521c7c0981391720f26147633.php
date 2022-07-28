<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'Support Chats'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">                    
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title col-sm-12"  ><?php echo e(__('Open Ticket')); ?> 
                                            <span class="float-right"><a data-target="#open_ticket" data-toggle="modal" href="javascript:void(0)" class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>New Ticket</a></span>
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">                                        
                                        <table  class=" display table table-striped table-hover" >
                                            <thead>
                                                <tr>                                                   
                                                    <th><?php echo e(__('Ticket ID')); ?></th> 
                                                    <th><?php echo e(__('Title')); ?></th>
                                                    <th><?php echo e(__('status')); ?></th>
                                                    <th><?php echo e(__('Action')); ?></th>                                                   
                                                    <!-- <th><?php echo e(__('Status')); ?></th>                                   -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php if(!empty($tickets)): ?>
                                                    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($ticket->ticket_id); ?></td>
                                                            <td><?php echo e($ticket->title); ?></td>
                                                            <td>
                                                                <?php if($ticket->status == 0): ?>
                                                                    <?php echo e(__('Closed')); ?>

                                                                <?php elseif($ticket->status == 1): ?>
                                                                    <?php echo e(__('Open')); ?>

                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a title="View Chat" href="/ticket/<?php echo e($ticket->id); ?>" class="btn btn_blue">
                                                                    <i class="fab fa-teamspeak"></i>
                                                                    <?php ($rd=0); ?>
                                                                    <?php $__currentLoopData = $ticket->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($comment->state == 1 && $comment->sender == 'support'): ?>
                                                                            <?php ($rd = 1); ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(isset($rd) && $rd == 1): ?>
                                                                        <i class="fa fa-circle new_not"></i>
                                                                        <?php ($rd = 0); ?>
                                                                    <?php endif; ?>
                                                                </a>
                                                                <?php if($ticket->status == 0): ?>
                                                                    <a title="Close Ticket" href="<?php echo e(route('ticket.close', $ticket->id)); ?>" class="btn btn-warning">
                                                                        <i class="fas fa-stop-circle"></i>
                                                                    </a>
                                                                <?php endif; ?>
                                                                
                                                            </td>                                                                                 
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <?php echo e($tickets->links()); ?>

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

<?php $__env->stopSection(); ?>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a02ccb19-e8b6-47a2-81c1-28c0afea0890";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/medchtkr/bitganar.com/core/resources/views/user/ticket.blade.php ENDPATH**/ ?>