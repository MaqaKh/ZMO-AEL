
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


@php
$currentLanguage = app()->getLocale(); // Get the current language
@endphp
<!-- single post -->
<section class="blog-post-main">
    <div class="blog-content-inf py-5">
        <div class="container py-md-5 py-4">
            <div class="row mx-auto">

                <div class="col-md-4">
                    <div class="row">
                        <div class="single-post-image post-img mb-4">

                            <img alt="blog-post-image" class="img-responsive"
                                 src="{{$product->image_path}}"/>

                        </div>

                    </div>
                    <div class="row mb-3">
                        <a class="tech-pdf" style="min-width: 80%"> <img style="max-height:16px;"
                                                                         src="{{asset('/images/icons/file-pdf-regular.svg')}}">
                            Technical data sheet</a>
                    </div>
                    <div class="row mb-3">
                        <p style="font-weight: 800">Available packs</p>

                    </div>
                    <div class="row">

                        @if ($product->pack_sizes)
                            @foreach (explode(',', $product->pack_sizes) as $pack_size)
                                <span class="product-pack">{{ $pack_size }}</span>
                            @endforeach
                        @endif

                    </div>

                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">

                        <div>
                            {{-- {!! $product->description_ru !!} --}}
                            @if($currentLanguage == 'en')
                                {!! $product->description_en !!}
                            @elseif($currentLanguage == 'ru')
                                {!! $product->description_ru !!}
                            @elseif($currentLanguage == 'ge')
                                {!! $product->description_ge !!}
                            @else
                                {!! $product->description_en !!}
                            @endif
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


