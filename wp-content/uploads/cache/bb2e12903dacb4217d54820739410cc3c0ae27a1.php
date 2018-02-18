<!--Start Navigation-->
<div class="navigation">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">

        <ul class="info">
          <li class="fas fa-envelope">info@example</li>
          <li class="fas fa-phone">info@example</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">

        <ul class="social">
          <li>
            <a href="#" class="fab fa-facebook-f" target="_blank" title="social"></a>
          </li>
          <li>
            <a href="#" class="fab fa-twitter" target="_blank" title="social"></a>
          </li>
          <li>
            <a href="#" class="fab fa-linkedin-in" target="_blank" title="social"></a>
          </li>
          <li>
            <a href="#" class="fab fa-youtube" target="_blank" title="social"></a>
          </li>
        </ul>
      </div>
      <div class="col-xs-12  col-md-4">
        <ul class="languge">
          <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
        </ul>
      </div>

    </div>

  </div>
</div>
<!--End Navigation-->

<!--Start Navbar-->
<div class="container">
  <div class=" navbar">
    <a class="logo" href="<?php echo e(home_url('/')); ?>">
      <img alt="logo" src="<?= App\asset_path('images/logo-title.png'); ?>">
    </a>
    <div class="button-bg">
      <div class="menu-icon"></div>
    </div>
      <?php if(has_nav_menu('primary_navigation')): ?>
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']); ?>

      <?php endif; ?>
    <a href="product.html" class="order-button">احجز المنتج الان</a>
  </div>
</div>
<!--End Navbar-->
