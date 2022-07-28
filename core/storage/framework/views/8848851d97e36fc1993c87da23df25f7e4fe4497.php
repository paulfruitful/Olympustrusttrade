<?php ($user_data = user_details_data($id)); ?>
<?php ($user = $user_data['user']); ?>
<?php ($dt = $user_data['dt']); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php echo $__env->make('admin.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    <?php echo $__env->make('admin.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card_header_bg_blue" >
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title text-white"> <?php echo e(__('User Details')); ?> </h4>
                                        <div class="card-tools">
                                            <a href="/admin/block/user/<?php echo e($user->id); ?>" > 
                                                <span class=""><i class="fa fa-ban btn btn-warning" ></i></span>
                                            </a>
                                            <a href="/admin/activate/user/<?php echo e($user->id); ?>" > 
                                                <span><i class="fa fa-check btn btn-success"></i></span>
                                            </a>
                                            <?php if($adm->role != 1): ?>
                                                <a href="/admin/delete/user/<?php echo e($user->id); ?>" > 
                                                    <span class=""><i class="fa fa-times btn btn-danger"></i></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>                                                                             
                                    </div>
                                </div>
                                <div class="card-body">                                    
                                    <div class="row pad_top_20">
                                        <div class="col-lg-6">
                                            <div class="form-group" align="center">
                                                <?php if($user->img == ""): ?>
                                                    <img class="img-responsive" src="/img/any.png" width="200px" height="200px">
                                                <?php else: ?>
                                                    <img class="img-responsive" src="/img/profile/<?php echo e($user->img); ?>" width="200px" height="200px">
                                                <?php endif; ?>
                                            </div>
                                        </div>  
                                        <div class="col-lg-6">
                                            <div class="card full-height">
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <h2 class="text-success"> <?php echo e(__('Account Summary')); ?> </h2>
                                                    </div>
                                                    <hr>
                                                    <div class="row py-3 <?php if($adm->role < 2): ?> <?php echo e(blur_cnt); ?><?php endif; ?> position_relative">
                                                        <div class="col-md-6 d-flex flex-column justify-content-around">
                                                            <div class="border_btm_1">
                                                                <h4 class="fw-bold  text-info op-8"> <?php echo e(__('Wallet Balance')); ?> </h4>
                                                                <h3 class="fw-bold"><?php echo e($settings->currency); ?> <?php echo e(round($user->wallet,2)); ?></h3>
                                                                <div class="colhd margin_top_n10 font_10">&emsp;</div>
                                                            </div>                      
                                                          <div class="clearfix"><br></div>                      
                                                            <div>                           
                                                                <h4 class="fw-bold text-info op-8"> <?php echo e(__('Referral Bonus')); ?> </h4>
                                                                <h3 class="fw-bold"><?php echo e($settings->currency); ?> <?php echo e(round ($user->ref_bal, 2)); ?></h3>
                                                                <div class="colhd margin_top_n10 font_10 ">&emsp;</div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="border_btm_1" >
                                                                <h4 class="fw-bold text-info op-8"> <?php echo e(__('Date Created')); ?> </h4>
                                                                <?php echo e($dt->format('Y-m-d')); ?>

                                                                <div class="colhd margin_top_n10 font_10">&emsp;</div> 
                                                                <br>    
                                                            </div>
                                                            <div class="clearfix"><br></div> 
                                                            <div>
                                                                <h4 class="fw-bold text-info op-8"> <?php echo e(__('Status')); ?> </h4>       
                                                                <span class="fa fa-circle" style="color: green;"></span>
                                                                <span class="">
                                                                <?php if($user->status == 1 || $user->status == 'Active'): ?> 
                                                                    Active
                                                                <?php elseif($user->status == 2 || $user->status == 'Blocked'): ?> 
                                                                    Blocked
                                                                <?php elseif($user->status == 0 || $user->status == 'Inactive'): ?> 
                                                                    Not Active
                                                                <?php endif; ?>
                                                                </span> 
                                                               
                                                                <div class="colhd margin_top_n10 font_10" >&emsp;</div> 
                                                                <br>    
                                                            </div>

                                                        </div>

                                                    </div>             
                                                </div>
                                            </div>                                            
                                            
                                        </div>                               
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> <?php echo e(__('First Name')); ?> </label>
                                                <input id="adr" type="text" value="<?php echo e(ucfirst($user->firstname)); ?>" class="form-control" name="fname" readonly>
                                            </div>
                                        </div>  
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> <?php echo e(__('Last Name')); ?> </label>
                                                <input id="adr" type="text" value="<?php echo e(ucfirst($user->lastname)); ?>" class="form-control" name="lname" readonly>
                                            </div>
                                        </div>                               
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> <?php echo e(__('Email Address')); ?> </label>
                                                <div class="input-group">                                                       
                                                    <input id="email" type="email" value="<?php echo e($user->email); ?>" class="form-control" name="email">
                                                </div>
                                                
                                            </div>
                                        </div>     

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> <?php echo e(__('Username')); ?> </label>
                                                <div class="input-group">                                                       
                                                    <input id="usn" type="text" value="<?php echo e($user->username); ?>" class="form-control" name="usn" readonly>
                                                </div>
                                                
                                            </div>
                                        </div>                                             
                                        
                                    </div>   

                                    <form class="" method="post" action="/admin/update/user/profile">
                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <input type="hidden" name="uid" value="<?php echo e($user->id); ?>">
                                                    <label> <?php echo e(__('Country')); ?> </label>
                                                    <select id="country" class="form-control" name="country" >
                                                        <?php 
                                                            $country = App\country::orderby('name', 'asc')->get();
                                                        ?>
                                                        <?php ($phn_code = ''); ?>
                                                        <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                           
                                                            <?php if($c->id == $user->country): ?>
                                                                <?php ($cs = $c->id); ?>
                                                                <?php ($phn_code = $c->phonecode); ?>
                                                                <?php echo e('selected'); ?>

                                                                <option selected  value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                                                             
                                                            <?php else: ?>
                                                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(!isset($cs)): ?>
                                                                <option selected disabled>Select Country</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <label> <?php echo e(__('State/Province')); ?> </label>
                                                    <select  id="states" class="form-control" name="state" required>
                                                        <?php if(isset($cs)): ?>
                                                            <?php 
                                                                $st = App\states::where('id', $user->state)->get();
                                                            ?>
                                                            <?php if(count($st) > 0): ?>
                                                                <option selected value="<?php echo e($st[0]->id); ?>"><?php echo e($st[0]->name); ?></option>
                                                            <?php else: ?>
                                                                <option selected disabled>Select State</option>
                                                            <?php endif; ?>
                                                            
                                                        <?php else: ?>
                                                           <option selected disabled>Select State</option>
                                                        <?php endif; ?>                                                           
                                                    </select>                                                        
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label> <?php echo e(__('Address')); ?> </label>
                                                    <input id="adr" type="text" class="form-control" value="<?php echo e($user->address); ?>" name="adr" required>
                                                </div>
                                            </div>  

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label> <?php echo e(__('Phone')); ?> </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span id="countryCode" class="input-group-text">
                                                                <?php if(isset($phn_code)): ?>
                                                                    <?php echo e('+'.$phn_code); ?>

                                                                <?php else: ?>
                                                                    +1
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>                                                        
                                                        <input id="cCode" type="hidden" class="form-control" name="cCode" required>
                                                        <input id="phone" type="text" class="form-control" value="<?php echo e(str_replace('+'.$phn_code,'',$user->phone)); ?>" name="phone" required>
                                                    </div>
                                                    
                                                </div>
                                            </div>                                             
                                            
                                        </div>   
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                       <button class="collb btn btn-info"> <?php echo e(__('Save')); ?> </button>
                                                </div>
                                            </div>              
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('Reset User Password')); ?> </div>
                                </div>
                                <div class="card-body pb-0">
                                    <form class="" method="post" action="/admin/change/user/pwd">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="uid" value="<?php echo e($user->id); ?>">
                                        <div class="form-group">
                                            <label> <?php echo e(__('New Password')); ?> </label>
                                            <input type="password" class="form-control" name="newpwd" placeholder="New Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label> <?php echo e(__('Confirm Password')); ?> </label>
                                            <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                                        </div>
                                            <div class="form-group" align="left">
                                               <button class="collb btn btn-info"> <?php echo e(__('Save Password')); ?> </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('User Investment')); ?> </div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php echo $__env->make('admin.temp.user_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('Withdrawal History')); ?> </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    <?php echo $__env->make('admin.temp.user_wd_history', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('Referrals')); ?> </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    <?php echo $__env->make('admin.temp.user_ref', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> <?php echo e(__('Bank Accounts')); ?> </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    <table  id="" class="display table table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <th> <?php echo e(__('Bank Name')); ?> </th>
                                                <th> <?php echo e(__('Acount Number')); ?> </th>
                                                <th> <?php echo e(__('Acount Name')); ?> </th>
                                                <th> <?php echo e(__('Actions')); ?> </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th> <?php echo e(__('Bank Name')); ?> </th>
                                                <th> <?php echo e(__('Acount Number')); ?> </th>
                                                <th> <?php echo e(__('Acount Name')); ?> </th>
                                                <th> <?php echo e(__('Actions')); ?> </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                 $mybanks = App\banks::where('user_id', $user->id)->get();
                                            ?>
                                            <?php if(count($mybanks) > 0): ?>
                                                <?php $__currentLoopData = $mybanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($bank->Bank_Name); ?></td>
                                                        <td><?php echo e($bank->Account_name); ?></td>
                                                        <td><?php echo e($bank->Account_number); ?></td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <br><br>
                                </div>
                            </div>
                        </div>                        
                    </div>         
                    
                </div>
            </div>
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overmvoo/fortunetradeinvest.com/core/resources/views/admin/user_details.blade.php ENDPATH**/ ?>