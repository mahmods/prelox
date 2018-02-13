<!doctype html>
<html <?php (language_attributes()); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body>
    <?php (do_action('get_header')); ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main class="main">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php (do_action('get_footer')); ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRtGkj_ZAI1LIlw1XqzqBCUuJjQB0RVTk"></script>
    <?php (wp_footer()); ?>
  </body>
</html>
