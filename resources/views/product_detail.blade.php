
@extends('master')


@section('content')

<!-- inner banner -->
<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">Product</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><span aria-hidden="true" class="fa fa-chevron-right mx-2"></span>Product</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


</div>


<!-- single post -->
<section class="blog-post-main">
    <div class="blog-content-inf py-5">
        <div class="container py-md-5 py-4">
            <div class="blog-posthny-info mx-auto" style="max-width:600px">
                <div class="style-title position-relative">
                    <h3 class="title-style mb-sm-3 mb-2">{{$product->name}}</h3>
                </div>
                <div class="single-post-image mb-4">

                    <img alt="blog-post-image" class="img-fluid img-responsive"
                         src="{{$product->image_path}}"/>

                </div>

                <div class="single-post-content">
                    <p class="mb-4"> {{$product->description}}</p>


                </div>

</section>
<!-- //single post -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>


@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/product_details.css') }}">

@endsection


