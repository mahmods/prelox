{{--
  Template Name: Blog Template
  --}}
@extends('layouts.app')
@section('content')
@include("partials.page-header")

<!-- Start Blog Page-->
<div class="blog">
  <div class="container-fluid">
    <div class="row">
    @if ($posts->have_posts())
      @while ($posts->have_posts()) @php($posts->the_post())
      <div class="col-sm-12 col-lg-6">
        <div class="blog-block">
          <div class="img" data-src="@asset('images/article1.png')">
            <a href="@php(the_permalink())" class="button fas fa-plus"></a>
          </div>
          <div class="describtion">
            <h3>@php(the_title())</h3>
            <a href="@php(the_permalink())">
              @php(the_excerpt())
            </a>
          </div>
        </div>
      </div>
      @endwhile
      @endif
    </div>
  </div>
  @if(App::get_pagination_links($posts))
    <div class="pagenation">
      <ul>
      @foreach(App::get_pagination_links($posts) as $link)
        <li>{!!$link!!}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
<!-- End Blog Page-->

@endsection