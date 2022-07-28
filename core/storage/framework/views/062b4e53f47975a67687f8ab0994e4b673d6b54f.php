<div class="panel-header" style="background-color: <?php echo e($settings->header_color); ?>">
	<div class="page-inner py-5" style="background-color: <?php echo e($settings->header_color); ?>">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">					
					Hi! Welcome <?php echo e(ucfirst($adm->name)); ?>					
				</h2>	
				<p class="text-white"><?php echo e(str_replace('/', ' > ', ucfirst(Request::path()))); ?></p>			
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<?php ($role = Session::get('adm')); ?>
                <?php if($role->role == 3): ?>
					<a href="/admin/manage/investments" class="btn btn-white btn-border btn-round mr-2">Investments</a>
					<a href="/admin/manage/deposits" class="btn btn-secondary btn-round">Deposit</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div><?php /**PATH /home/hosthikr/test.hostmeng.com.ng/core/resources/views/admin/atlantis/main_bar.blade.php ENDPATH**/ ?>