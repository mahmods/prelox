<?php $__env->startSection('content'); ?>
    <!--Start Header Slider-->
    <div class="slider">
        <div class="header-slider">
            <div class="header" data-src="<?= App\asset_path('images/home-bg.png'); ?>">
                <div class="content">
                    <h1>
                        <span> بريلوكس</span> يضمن لك سعادة زوجية مدى الحياة</h1>
                    <p>
                        هو منتج طبيعي 100% ذو تركيبه فريدة مبتكره ومثبته علميا وحائزه علي براءة إختراع
                    </p>
                    <a href="#">قراءة المزيد</a>
                </div>
            </div>

            <div class="header" data-src="<?= App\asset_path('images/home-bg.png'); ?>">
                <div class="content">
                    <h1>
                        <span> بريلوكس</span> يضمن لك سعادة زوجية مدى الحياة</h1>
                    <p>
                        هو منتج طبيعي 100% ذو تركيبه فريدة مبتكره ومثبته علميا وحائزه علي براءة إختراع
                    </p>
                    <a href="#">قراءة المزيد</a>
                </div>
            </div>

            <div class="header" data-src="<?= App\asset_path('images/home-bg.png'); ?>">
                <div class="content">
                    <h1>
                        <span> بريلوكس</span> يضمن لك سعادة زوجية مدى الحياة</h1>
                    <p>
                        هو منتج طبيعي 100% ذو تركيبه فريدة مبتكره ومثبته علميا وحائزه علي براءة إختراع
                    </p>
                    <a href="#">قراءة المزيد</a>
                </div>
            </div>

            <div class="header" data-src="<?= App\asset_path('images/home-bg.png'); ?>">
                <div class="content">
                    <h1>بريلوكس يضمن لك سعادة زوجية مدى الحياة</h1>
                    <p>
                        هو منتج طبيعي 100% ذو تركيبه فريدة مبتكره ومثبته علميا وحائزه علي براءة إختراع
                    </p>
                    <a href="#">قراءة المزيد</a>
                </div>
            </div>
        </div>
    </div>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>