<?php $__env->startSection('content'); ?>
<?php echo $__env->make("partials.page-header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="about-us-page">
  <div class="container">
    <div class="about-block">
      <h2 class="title"><?php echo e($main_block['title']); ?></h2>
      <p><?php echo e($main_block['content']); ?></p>
    </div>
    <div class="row">
      <?php if($blocks): ?>
      <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-12 col-lg-6 col-xl-4">
        <div class="other-block">
          <div class="icon-about">
            <img src="<?= App\asset_path('images/icon1.png'); ?>">
          </div>
          <h2 class="title"><?php echo e($block['title']); ?></h2>
          <p><?php echo e($block['content']); ?></p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php echo $__env->make("partials.map", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>