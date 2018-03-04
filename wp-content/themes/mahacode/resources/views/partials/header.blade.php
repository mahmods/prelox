<?php $info = App::contactInfo() ?>
<!--Start Navigation-->
<div class="navigation">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">

        <ul class="info">
          <li class="fas fa-envelope">{{$info['email_1']}}</li>
          <li class="fas fa-phone">{{$info['phone_1']}}</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">

        <ul class="social">
          <li>
            <a href="{{$info['facebook']}}" class="fab fa-facebook-f" target="_blank" title="social"></a>
          </li>
          <li>
            <a href="{{$info['twitter']}}" class="fab fa-twitter" target="_blank" title="social"></a>
          </li>
          <li>
            <a href="{{$info['linkedin']}}" class="fab fa-linkedin-in" target="_blank" title="social"></a>
          </li>
          <li>
            <a href="{{$info['youtube']}}" class="fab fa-youtube" target="_blank" title="social"></a>
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
    <a class="logo" href="{{ home_url('/') }}">
      <img alt="logo" src="@asset('images/logo-title.png')">
    </a>
    <div class="button-bg">
      <div class="menu-icon"></div>
    </div>
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu'])!!}
      @endif
    <a href="<?=get_the_permalink(pll_get_post(43))?>" class="order-button"><?=pll__("Purchase Now")?></a>
  </div>
</div>
<!--End Navbar-->
