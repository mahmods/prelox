<?php $__env->startSection('content'); ?>
<!--Start Header Slider-->
<div class="slider">
  <div class="header-slider">
  <?php if($slider): ?>
  <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="header" data-src="<?php echo e($slide['image']); ?>">
      <div class="content">
        <h1><?php echo e($slide['title']); ?></h1>
        <p><?php echo e($slide['content']); ?></p>
        <a href="<?php echo e($slide['link']); ?>">قراءة المزيد</a>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </div>
</div>
<!--Start info-->
<div class="all-info">
  <div class="container ">
    <div class="row">
      <div class="col-xm-12 col-sm-6 col-lg-4">
        <div class="block">
          <ul class="info">
            <li class="fas fa-envelope"></li>
            <li>تواصل معنا</li>
          </ul>
          <?php $info = App::contactInfo() ?>
          <ul class="call">
            <li><?php echo e($info['email_1']); ?></li>
            <li><?php echo e($info['email_2']); ?></li>
          </ul>
        </div>
      </div>

      <div class="col-xm-12 col-sm-6 col-lg-4 ">
        <div class="block">
          <ul class="info">
            <li class="fas fa-phone"></li>
            <li>تواصل معنا</li>
          </ul>
          <ul class="call">
            <li><?php echo e($info['phone_1']); ?></li>
            <li><?php echo e($info['phone_2']); ?></li>
          </ul>
        </div>
      </div>

      <div class="col-xm-12 col-sm-6 col-lg-4">
        <div class="block">
          <ul class="info">
            <li class="fas fa-map-marker-alt"></li>
            <li>تواصل معنا</li>
          </ul>
          <ul class="call">
            <li><?php echo e($info['address']); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End info-->
</div>
<!--End Header Slider-->





<!--Start About Us-->
<div class="about-us">
  <div class="container ">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <h2 class="title"><?php echo e($about_block['title']); ?></h2>
        <p><?php echo e($about_block['content']); ?></p>
        <a href="#" title="link">قراءة المزيد</a>
      </div>

      <div class="col-sm-12 col-lg-6">
        <div class="block-img">
          <img src="<?php echo e($about_us_image); ?>">
        </div>
      </div>
    </div>
  </div>

</div>

<!--End About Us-->

<!--Start Why Product-->
<div class="why">
  <div class="container">
    <h2 class="title">لماذا بريلوكس</h2>
    <div class="row">
      <div class="col-md-12 col-lg-3">
        <div class="box" data-src="<?php echo e($why_section[0]['image']); ?>">
          <p><?php echo e($why_section[0]['content']); ?></p>
        </div>
      </div>

      <div class="col-md-12 col-lg-6">
        <div class="row">
          <div class="col-sm-12">
            <div class="block" data-src="<?php echo e($why_section[1]['image']); ?>">
              <p><?php echo e($why_section[1]['content']); ?></p>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="block" data-src="<?php echo e($why_section[2]['image']); ?>">
              <p><?php echo e($why_section[2]['content']); ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-3">
        <div class="box" data-src="<?php echo e($why_section[3]['image']); ?>">
          <p><?php echo e($why_section[3]['content']); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Why Product-->

<!--Start Video-->
<div class="video" data-src="<?= App\asset_path('images/video.png'); ?>">
  <div class="video-content" id="model-box">
    <h3>لماذا بريلوكس</h3>
    <i class="fas fa-video" id="myBtn"></i>
  </div>


</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <!-- Modal content -->
  <div class="modal-content">

    <div class="video-frame">
        <?php echo $video; ?>

    </div>
  </div>

</div>
<!--End Section Of Video-->
<!--End Video-->

<!--Start Product-->
<div class="product">
  <div class="container ">
    <h2 class="title">تفاصيل علمية وطبية عن بريلوكس</h2>
    <div class="row">
      <div class="col-sm-12 col-md-4">
      <?php if(!empty($product_details[0])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($product_details[0]['content']); ?></p>
        </div>
        <?php endif; ?>
        <?php if(!empty($product_details[2])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($product_details[2]['content']); ?></p>
        </div>
        <?php endif; ?>
      </div>

      <div class="col-sm-12 col-md-4">
        <div class="product-img">
          <img src="<?= App\asset_path('images/product.png'); ?>">
        </div>
      </div>

      <div class="col-sm-12 col-md-4">
      <?php if(!empty($product_details[1])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($product_details[1]['content']); ?></p>
        </div>
        <?php endif; ?>
        <?php if(!empty($product_details[3])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($product_details[3]['content']); ?></p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!--End Product-->

<!--Start Testmonial-->
<div class="testmonial" data-src="<?= App\asset_path('images/bg-testmonial.png'); ?>">
  <div class="container">
    <h2 class="title">آراء العملاء</h2>
    <div class="row testmonial-slider">
    <?php if($testimonials): ?>
    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm">
        <div class="block">
          <p><?php (the_field('content', $testimony)); ?></p>
          <div class="opinion">

            <i data-src="<?php (the_field('image', $testimony)); ?>"></i>

            <ul>
              <li><?php (the_field("name", $testimony)); ?></li>
              <li>
                <?php if($testimony): ?><span><?php (the_field("title", $testimony)); ?></span><?php endif; ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--End Testmonial-->

<!--Start Article-->
<div class=" article-home">
  <div class="container">
    <h2 class="title">المدونة</h2>
    <div class="row article-slider">
    <?php if($blog_posts): ?>
    <?php $__currentLoopData = $blog_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md">
        <div class=" article-block">
          <div class="img" data-src="<?php echo e(get_the_post_thumbnail_url($post, 'full')); ?>"></div>

          <div class="article-paragraph">
            <h3><?php echo e(get_the_title($post)); ?></h3>
            <p><?php echo e(mb_strimwidth(strip_tags($post->post_content),0,50)); ?></p>
            <a href="<?php echo e(get_the_permalink($post)); ?>">قراءة المزيد</a>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </div>
  </div>
</div>



<!--End Article-->

<!-- Start Form And Our Comany-->
<div class="company-form">
  <!--Start Form-->
  <div data-src="<?= App\asset_path('images/order.png" class="form-style'); ?>">
    <?php echo do_shortcode('[hf_form slug="purchase"]'); ?>

  </div>
  <!--End Form-->
</div>
<!-- Start Form And Our Comany-->
<?php echo $__env->make('partials.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>