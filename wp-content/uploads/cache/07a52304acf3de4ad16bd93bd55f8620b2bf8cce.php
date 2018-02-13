<?php $__env->startSection('content'); ?>
<?php echo $__env->make("partials.page-header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--Start Product-->
<div class="product">
  <div class="container ">
    <h2 class="title">تفاصيل علمية وطبية عن بريلوكس</h2>
    <div class="row">
      <div class="col-sm-12 col-md-4">
      <?php if(!empty($details[0])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($details[0]['content']); ?></p>
        </div>
        <?php endif; ?>
        <?php if(!empty($details[2])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($details[2]['content']); ?></p>
        </div>
        <?php endif; ?>
      </div>

      <div class="col-sm-12 col-md-4">
        <div class="product-img">
          <img src="<?= App\asset_path('images/product.png'); ?>">
        </div>
      </div>

      <div class="col-sm-12 col-md-4">
      <?php if(!empty($details[1])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($details[1]['content']); ?></p>
        </div>
        <?php endif; ?>
        <?php if(!empty($details[3])): ?>
        <div class="feuture">
          <i>
            <img alt="img" src="<?= App\asset_path('images/product1.png'); ?>">
          </i>
          <p><?php echo e($details[3]['content']); ?></p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!--End Product-->


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
<!--End Video-->

<!-- Start Form And Our Comany-->
<div class="company-form">
  <div data-src="<?= App\asset_path('images/order.png'); ?>" class="form-style">
    <form class="form-contnt ">
      <h2 class="title">احجز المنتج الآن</h2>
      <input type="text" placeholder="الاسم بالكامل :">
      <input type="text" placeholder="البريد الإلكترونى:">
      <input type="text" placeholder="الشركة" />
      <input type="number" placeholder="الكمية " />
      <input type="submit" value="ارسال">
    </form>
  </div>

</div>
<!-- Start Form And Our Comany-->

<?php echo $__env->make("partials.map", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>