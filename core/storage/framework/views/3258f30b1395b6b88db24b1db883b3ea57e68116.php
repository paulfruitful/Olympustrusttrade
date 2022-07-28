<?php
	$settings = App\site_settings::find(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo e($settings->site_title); ?> - <?php echo e($settings->site_descr); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon"  href="/img/<?php echo e($settings->site_logo); ?>" type="image/x-icon"/>
	
	<script src="/atlantis/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/atlantis/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/atlantis/css/bootstrap.min.css">
	<link rel="stylesheet" href="/atlantis/css/atlantis.min.css">
	<link rel="stylesheet" href="/atlantis/style.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/atlantis/css/demo.css">

	<!--   Core JS Files   -->
	<script src="/atlantis/js/core/jquery.3.2.1.min.js"></script>
	<script src="/atlantis/js/core/popper.min.js"></script>
	<script src="/atlantis/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="/atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="/atlantis/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/atlantis/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/atlantis/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="/atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/atlantis/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/atlantis/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/atlantis/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/atlantis/js/setting-demo.js"></script>
	<script src="/atlantis/js/demo.js"></script>
	<!-- <script src="/atlantis/main.js"></script> -->
	<script src="/atlantis/js/moment.js"></script>

	 <!-- tinymce -->
    <script src="/tinymce5/jquery.tinymce.min.js"></script>
    <script src="/tinymce5/tinymce.min.js"></script>

    <!-- tinymce -->

</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" style="background-color: <?php echo e($settings->header_color); ?>">
				<button class="navbar-toggler sidenav-toggler ml-auto " type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					&nbsp;&nbsp;&nbsp;
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				 <a href="/admin/home" style="color: #FFF;">
                    <img src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>" style="height: 60px;; z-index: 1; border-radius:50%;" />
                </a>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<!-- <div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div> -->
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" style="background-color: <?php echo e($settings->header_color); ?>">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="<?php echo e(route('support.index')); ?>" role="button" style="color:#fff">
								<?php                                  
	                                $msgs = App\ticket::With('comments')->orderby('id', 'desc')->get();
	                                $rd = 0;
	                            ?>								
								<i class="fab fa-teamspeak not_cont">
									<?php $__currentLoopData = $msgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php if($msg->state == 1): ?>                        
                                            <?php ($rd = 1); ?>                                  
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $msg->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        	<?php if($comment->state == 1 && $comment->sender == 'user'): ?>
                                        		<?php ($rd = 1); ?>
                                        	<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($rd == 1): ?>   
                                    	<i class="fa fa-circle new_not"></i>
                                    <?php endif; ?>									
								</i> Support Center
							</a>							
						</li>
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<?php if($adm->img == ""): ?>
										<img src="/img/any.png" alt="avatar" class="avatar-img rounded-circle" align="center" />
									<?php else: ?>							
										<img src="/img/profile/<?php echo e($adm->img); ?>" alt="avatar" class="avatar-img rounded-circle" align="center" />
									<?php endif; ?>	
								</div>								
							</a>
							<ul class="dropdown-menu dropdown-adm animated fadeIn">
								<div class="dropdown-adm-scroll scrollbar-outer">
									
									<li>																			
										<a class="dropdown-item" href="/admin/manage/users">
											<span class="fa fa-users"></span> &nbsp;Manage Users
										</a>
										<?php ($role = Session::get('adm')); ?>
                                        <?php if($role->role == 3): ?>
											<a class="dropdown-item" href="/admin/manage/adminUsers">
												<span class="fa fa-users"></span>&nbsp; Manage Admin Users
											</a>
											<a class="dropdown-item" href="/admin/manage/investments">
												<span class="fa fa-paper-plane"></span>&nbsp; Manage Investments
											</a>
											<a class="dropdown-item" href="/admin/manage/deposits">
												<span class="fas fa-donate"></span>&nbsp; User Deposits
											</a>
											<a class="dropdown-item" href="/admin/manage/withdrawals">
												<span class="fa fa-file"></span>&nbsp; User Withdrawal 
											</a>
										<?php endif; ?>

										<a class="dropdown-item" href="/admin/manage/packages">
											<span class="fa fa-briefcase"></span>&nbsp; Packages
										</a>
										<a class="dropdown-item" href="/admin/send/msg">
											<span class="fa fa-bell"></span>&nbsp; Send Notification
										</a>
										<a class="dropdown-item" href="/admin/change/pwd">
											<span class="fa fa-key"></span>&nbsp; Change Password
										</a>	
										<a class="dropdown-item" href="<?php echo e(route('support.index')); ?>">
											<span class="fab fa-teamspeak"></span>&nbsp; Support Center
										</a>	

										<?php ($role = Session::get('adm')); ?>
                                        <?php if($role->role == 3): ?>		
                                        	<a class="dropdown-item" href="/admin/viewlogs">
												<span class="fa fa-list"></span>&nbsp; View User Activities
											</a>
											<a class="dropdown-item" href="/admin/view/settings">
												<span class="fa fa-gears"></span>&nbsp; Settings
											</a>
										<?php endif; ?>								
										
										
										<a class="dropdown-item" href="/logout"><span class="fa fa-arrow-right"></span> &nbsp;Logout</a>

									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user-plus" style="background-color: <?php echo e($settings->header_color); ?>">
						<a data-toggle="collapse" href="/admin/home" aria-expanded="true">
							<div class="" align="center">
							<?php if($adm->img == ""): ?>
								<img src="/img/any.png" alt="avatar" class="avatar-img rounded-circle" align="center" style="height: 50px; width: 50px; border-radius: 50%;" />
							<?php else: ?>							
								<img src="/img/profile/<?php echo e($adm->img); ?>" alt="avatar" class="avatar-img rounded-circle" align="center" />
							<?php endif; ?>
							</div>
							<div class="info" align="center">							
									<span>
										<?php echo e(ucfirst($adm->name)); ?>									
									</span>
								<div class="clearfix"></div>							
							</div>
						</a>
					</div>
					<ul class="nav nav-primary">
					    <li class="nav-item">
					    	<a  href="/admin/home">
								<i class="fas fa-palette"></i>
								<p> Dashboard</p>
							</a>
						</li>
						
						<?php ($role = Session::get('adm')); ?>
                        <?php if($role->role == 3): ?>
                        	<li class="nav-item">
								<a data-toggle="collapse" href="#user_drp">
									<i class="fa fa-users"></i>
									<p> Manage Users</p>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="user_drp" >
									<ul class="nav nav-collapse">
										<li >
				                        	<a href="/admin/manage/users">
												<span class="sub-item"> Users </span>
											</a>
										</li>
										
										<li class="">
											<a href="/admin/manage/adminUsers">
												<span class="sub-item"> Admin </span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							
							<li class="nav-item">
						    	<a href="/admin/manage/investments">
									<i class="fas fa-hand-holding-usd"></i>
									<p> Manage Investments</p>
								</a>
							</li>
							
							<li class="nav-item">
						    	<a href="/admin/manage/deposits">
									<i class="fas fa-donate"></i>
									<p> Users Deposits </p>
								</a>
							</li>
							
							<li class="nav-item">
						    	<a href="/admin/manage/withdrawals">
									<i class="fas fa-arrow-circle-down"></i>
									<p> User Withdrawal </p>
								</a>
							</li>
						<?php endif; ?>
						
						<li class="nav-item">
					    	<a href="/admin/manage/packages">
								<i class="fa fa-briefcase"></i>
								<p> Packages </p>
							</a>
						</li>
						
						<li class="nav-item">
					    	<a href="/admin/send/msg">
								<i class="fa fa-bell"></i>
								<p> Send Notification </p>
							</a>
						</li>
						
						<li class="nav-item">
					    	<a href="/admin/change/pwd">
								<i class="fa fa-key"></i>
								<p> Change Password </p>
							</a>
						</li>
						
						<li class="nav-item">
					    	<a href="<?php echo e(route('support.index')); ?>">
								<i class="fab fa-teamspeak"></i>
								<p> Support Center </p>
							</a>
						</li>			

												
                        <?php if($role->role == 3): ?>
							<li class="nav-item">
								<a data-toggle="collapse" href="#base">
									<i class="fas fa-wrench"></i>
									<p>Settings</p>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="base">
									<ul class="nav nav-collapse">
										<li >
				                        	<a href="/admin/viewlogs">
												<span class="sub-item">View User Activities</span>
											</a>
										</li>
										
										<li class="">
											<a href="/admin/view/settings">
												<span class="sub-item">Settings</span>
											</a>
										</li>
										<li class="">
											<a href="/admin/profile/settings">
												<span class="sub-item">Profile</span>
											</a>
										</li>

										<li class="">
											<a href="/admin/profile/kyc">
												<span class="sub-item">KYC</span>
											</a>
										</li>

									</ul>
								</div>
							</li>
						<?php endif; ?>	

						
						<li class="nav-item">
							<a href="/logout">
								<i class="fas fa-arrow-left"></i>
								<p>Logout</p>
								<!-- <span class="caret"></span> -->
							</a>							
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar --><?php /**PATH /home/hosthikr/test.hostmeng.com.ng/core/resources/views/admin/atlantis/header.blade.php ENDPATH**/ ?>