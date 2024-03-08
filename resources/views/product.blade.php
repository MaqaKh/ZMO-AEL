
@extends('master')


@section('content')

<!-- inner banner -->
<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">Product</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><span aria-hidden="true" class="fa fa-chevron-right mx-2"></span>Products</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->
    @php
    $currentLanguage = app()->getLocale(); // Get the current language
    @endphp
<!-- blog section -->
<div class="w3l-homeblock2 py-5">
    <div class="container py-md-5 py-4">

        <div class="row">
            <div class="service-section py-5">
                <div class="container py-md-5 py-4">
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6 section-heading">
                            <!--                    <h5 class="small-title-2">Web Services</h5>-->
                            <h3 class="title-style-2">
                                Our Best Products</h3>
                        </div>

                        <div class="col-md-6 section-heading mt-md-0 mt-2 text-right">
                            <a href="/product" class="ml-auto">All products</a>
                            <!-- You can add other content here if needed -->
                        </div>
                    </div>



                    <div class="row justify-content-center">


                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                                <div class="card" style="height: 450px; /* Set a fixed height for the card */">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ route('product-details', ['id' => $product->id]) }}"  >
                                        <img alt="card-image"
                                             class="d-block img-responsive"
                                             src={{$product->image_path}}
>
                                    </a>
                                </div>

                                <div class="card-body service-details">
                                    <span class="label-style">
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
                                    <a class="service-heading" href="{{ url('/services') }}">{{$product->name}}</a>
                                    <p>




                                    </p>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

        {{$products->links()}}
    </div>
</div>
<!-- //blog section -->
<div style="margin: 8px auto; display: block; text-align:center;">

</div>
</div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection


