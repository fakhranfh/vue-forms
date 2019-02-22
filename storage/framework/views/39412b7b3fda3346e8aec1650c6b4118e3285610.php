<?php if(count($projects)): ?>
	<h1 class="title is-3">My Projects</h1>

	<ul>
		<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li>
				<a href="#"><?php echo e($project->name); ?></a>
			</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>

	<hr>
<?php endif; ?>
