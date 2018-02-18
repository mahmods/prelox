<?php $__env->startSection('content'); ?>
<?php echo $__env->make("partials.page-header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Start Blog Page-->
<div class="blog">
  <div class="container-fluid">
    <div class="row">
    <?php if($posts->have_posts()): ?>
      <?php while($posts->have_posts()): ?> <?php ($posts->the_post()); ?>
      <div class="col-sm-12 col-lg-6">
        <div class="blog-block">
          <div class="img" data-src="<?= App\asset_path('images/article1.png'); ?>">
            <a href="<?php (the_permalink()); ?>" class="button fas fa-plus"></a>
          </div>
          <div class="describtion">
            <h3><?php (the_title()); ?></h3>
            <a href="<?php (the_permalink()); ?>">
              <?php (the_excerpt()); ?>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <?php if(App::get_pagination_links($posts)): ?>
    <div class="pagenation">
      <ul>
      <?php $__currentLoopData = App::get_pagination_links($posts); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo $link; ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
</div>
<!-- End Blog Page-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>