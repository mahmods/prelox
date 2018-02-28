<article @php(post_class())>
<!--Start Single Article-->
<div class="single-article">
  <div class="container">
    <div class="row">
      <!--Block Article-->
      <div class="col-sm-12 col-lg-9 content-article">
        <h2>@php(the_title())</h2>
        @include('partials/entry-meta')
        <div class="img-single-article">
          <img src="@php(the_post_thumbnail_url('full'))">

        </div>
        <p>@php(the_content())</p>
        
        @php(comments_template('/partials/comments.blade.php'))
      </div>


      <!--Block media-->
      <div class="col-sm-12 col-lg-3">
        <div class="some-title">
          <?php if ( function_exists( 'echo_ald_crp' ) ) echo_crp(); ?>
        </div>
      </div>

    </div>
  </div>
</div>
<!--End Single Article-->
</article>
