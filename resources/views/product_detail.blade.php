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

                    <div class="col-md-4 border-rb-1px">
                        <div class="row">
                            <div class="single-post-image post-img mb-4 mr-4">

                                <img alt="blog-post-image" class="img-responsive"
                                     src="{{$product->image_path}}"/>

                            </div>

                        </div>
                        <div class="row mb-3 mr-1">
                            <a class="tech-pdf" href="{{$product->pdf}}" target="_blank">
                                <img style="max-height:16px;" src="{{asset('/images/icons/file-pdf-regular.svg')}}">
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
                    <div class="col-md-7 ml-4">
                        <div class="row justify-content-center">

                            <div>
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

                <hr style="margin-top:0px;">

                <div class="row mt-5">
                    <h2 class="">Related Products</h2>
                    <div class="row mt-5">
                        @if(isset($product->relatedProducts))
                            @foreach($product->relatedProducts as $product)
                                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative border-0">
                                            <a href={{ route('product-details', ['id' => $product->id]) }}>
                                                <img alt="card-image" class="d-block card-img-top"
                                                     src="{{$product->image_path}}">
                                            </a>
                                        </div>
                                        <div class="card-body service-details">
                                <span class="label-style label-style-3">

                                    @if($currentLanguage == 'en')
                                        {{$product->category->name_en}}
                                    @elseif($currentLanguage == 'ru')
                                        {{$product->category->name_ru}}
                                    @elseif($currentLanguage == 'ge')
                                        {{$product->category->name_ge}}
                                    @else
                                        {{$product->category->name_en}}
                                    @endif
                                </span>
                                            <a class="service-heading"
                                               href={{ route('product-details', ['id' => $product->id]) }}>{{$product->name}}</a>
                                            <p>
                                                <!-- Your additional content here -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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


