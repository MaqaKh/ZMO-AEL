
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
        <div class="container-fluid py-md-5 py-4">
            <div class="blog-posthny-info mx-auto">

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="single-post-image mb-4">

                            <img alt="blog-post-image" class="img-responsive"
                                 src="{{$product->image_path}}"/>

                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <h3 class="title-style mb-sm-3 mb-2">{{$product->name}}</h3>
                        <br>
                        <br>
                        @if($product->pdf)
                            <p class="mb-2 mt-4 justify-content-end align-items-center">
                            <span class="fas fa-download" aria-hidden="true"></span>

                            <a href="{{ asset($product->pdf) }}"    target="_blank">Open PDF</a>
                            @else
                           <p>No PDF available</p>
                            @endif
                        </p>
                        <p class="mb-4">Category: {{$product->category->name_en}}</p>
                    </div>
                </div>


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div>
                            {!! $product->description_ru !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


