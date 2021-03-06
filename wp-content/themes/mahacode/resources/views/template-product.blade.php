{{--
  Template Name: Product Template
  --}}
@extends('layouts.app')
@section('content')
@include("partials.page-header")
<!--Start Product-->
<div class="product">
  <div class="container ">
    <h2 class="title"><?=pll__("Scientific and medical details about Prelox")?></h2>
    <div class="row">
      <div class="col-sm-12 col-md-4">
      @if(!empty($details[0]))
        <div class="feuture">
          <i>
            <img alt="img" src="@asset('images/product1.png')">
          </i>
          <p>{{$details[0]['content']}}</p>
        </div>
        @endif
        @if(!empty($details[2]))
        <div class="feuture">
          <i>
            <img alt="img" src="@asset('images/product1.png')">
          </i>
          <p>{{$details[2]['content']}}</p>
        </div>
        @endif
      </div>

      <div class="col-sm-12 col-md-4">
        <div class="product-img">
          <img src="@asset('images/product.png')">
        </div>
      </div>

      <div class="col-sm-12 col-md-4">
      @if(!empty($details[1]))
        <div class="feuture">
          <i>
            <img alt="img" src="@asset('images/product1.png')">
          </i>
          <p>{{$details[1]['content']}}</p>
        </div>
        @endif
        @if(!empty($details[3]))
        <div class="feuture">
          <i>
            <img alt="img" src="@asset('images/product1.png')">
          </i>
          <p>{{$details[3]['content']}}</p>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
<!--End Product-->


<!--Start Video-->
<div class="video" data-src="@asset('images/video.png')">
  <div class="video-content" id="model-box">
    <h3><?=pll__("Why Prelox")?></h3>
    <i class="fas fa-video" id="myBtn"></i>
  </div>


</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <!-- Modal content -->
  <div class="modal-content">
    <div class="video-frame">
      {!!$video!!}
    </div>
  </div>

</div>
<!--End Video-->

<!-- Start Form And Our Comany-->
<div class="company-form">
<!--Start Form-->
<div data-src="@asset('images/order.png" class="form-style')">
  {!!do_shortcode('[hf_form slug="purchase"]')!!}
</div>
<!--End Form-->
</div>
<!-- Start Form And Our Comany-->

@include("partials.map")
@endsection