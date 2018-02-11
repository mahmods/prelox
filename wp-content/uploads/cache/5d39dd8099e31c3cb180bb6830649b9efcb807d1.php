<header class="banner">
  <div class="container">
    <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?> <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?> <?php endif; ?>
    </nav>
  </div>
</header>

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
          <li>
            <a href="#">
              <img src="<?= App\asset_path('images/ar.png'); ?>">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?= App\asset_path('images/en.png'); ?>">
            </a>
          </li>
        </ul>
      </div>

    </div>

  </div>
</div>
<!--End Navigation-->

<!--Start Navbar-->
<div class="container">
  <div class=" navbar">
    <a class="logo" href="index.html">
      <img alt="logo" src="<?= App\asset_path('images/logo-title.png'); ?>">
    </a>
    <div class="button-bg">
      <div class="menu-icon"></div>
    </div>
    <ul class="menu">
      <li>
        <a href="index.html" title="link">الرئيسية</a>
      </li>
      <li>
        <a href="about-us.html" title="link">من نحن</a>
      </li>
      <li>
        <a href="product.html" title="link">عن المنتج</a>
      </li>
      <li>
        <a href="single.html" title="link">أراء العملاء عنا</a>
      </li>
      <li>
        <a href="blog.html" title="link">المدونة</a>
      </li>
    </ul>
    <a href="product.html" class="order-button">احجز المنتج الان</a>
  </div>
</div>
<!--End Navbar-->
