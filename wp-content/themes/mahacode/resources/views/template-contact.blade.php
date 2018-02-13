{{--
  Template Name: Contact Us Template
  --}}
@extends('layouts.app')
@section('content')
@include("partials.page-header")
<div class="about-us-page">
  <div class="container">
    <div class="about-block">
      <h2 class="title">{{$main_block['title']}}</h2>
      <p>{{$main_block['content']}}</p>
    </div>
    <div class="row">
      @if($blocks)
      @foreach($blocks as $block)
      <div class="col-sm-12 col-lg-6 col-xl-4">
        <div class="other-block">
          <div class="icon-about">
            <img src="@asset('images/icon1.png')">
          </div>
          <h2 class="title">{{$block['title']}}</h2>
          <p>{{$block['content']}}</p>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</div>
@include("partials.map")
@endsection
