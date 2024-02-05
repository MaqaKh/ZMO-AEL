
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
                            <a href="#url" class="ml-auto">All products</a>
                            <!-- You can add other content here if needed -->
                        </div>
                    </div>



                    <div class="row justify-content-center">


                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 item">
                            <div class="card">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ route('product-details', ['id' => $product->id]) }}"  >
                                        <img alt="card-image"
                                             class="d-block img-responsive"
                                             src={{$product->image_path}}
>
                                    </a>
                                </div>

                                <div class="card-body service-details">
                                    <span class="label-style">{{$product->category->name}}</span>
                                    <a class="service-heading" href="{{ url('/services') }}">{{$product->name}}</a>
                                    <p>We offer Mobil™ 10W-40 high viscosity motor oils for use in vehicles with more
                                        than
                                        75,000 miles, and a synthetic blend oil.
                                    </p>
                                </div>
                            </div>
                        </div>

                        @endforeach



{{--
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ url('/services') }}">
                                        <img alt="card-image"
                                             class="d-block img-responsive"
                                             src="{{ asset('images/products/5W-40%20FS%20ELITE%20LONG%20LIFE.png') }}">
                                    </a>
                                </div>
                                <div class="card-body service-details">
                                    <span class="label-style label-style-2">Engine</span>
                                    <a class="service-heading" href="{{ url('/services') }}">Mobile Applications</a>
                                    <p>w40 motor oil has a winter viscosity grade of five, meaning it’s less viscous at
                                        very low
                                        temperatures, compared to, say, 10w40</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ url('/services') }}">
                                        <img alt="card-image" class="d-block img-responsive"
                                        src="{{ asset('images/products/5w30%20-eco%20power.png') }}">
                                    </a>
                                </div>
                                <div class="card-body service-details">
                                    <span class="label-style label-style-3">Transmission</span>
                                    <a class="service-heading" href="{{ url('/services') }}">Digital Marketing</a>
                                    <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including
                                        products
                                        designed for high mileage vehicles, trucks and SUVs.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ url('/services') }}">
                                        <img alt="card-image" class="d-block img-responsive"
                                        src="{{ asset('images/products/5w30%20-eco%20power.png') }}"
                                        >
                                    </a>
                                </div>
                                <div class="card-body service-details">
                                    <span class="label-style label-style-3">Transmission</span>
                                    <a class="service-heading" href="{{ url('/services') }}">Digital Marketing</a>
                                    <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including
                                        products
                                        designed for high mileage vehicles, trucks and SUVs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ url('/services') }}">
                                        <img alt="card-image" class="d-block img-responsive"
                                        src="{{ asset('images/products/5w30%20-eco%20power.png') }}">
                                    </a>
                                </div>
                                <div class="card-body service-details">
                                    <span class="label-style label-style-3">Transmission</span>
                                    <a class="service-heading" href="{{ url('/services') }}">Digital Marketing</a>
                                    <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including
                                        products
                                        designed for high mileage vehicles, trucks and SUVs.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ url('/services') }}">
                                        <img alt="card-image" class="d-block img-responsive"
                                        src="{{ asset('images/products/5w30%20-eco%20power.png') }}"
                                        >
                                    </a>
                                </div>
                                <div class="card-body service-details">
                                    <span class="label-style label-style-3">Transmission</span>
                                    <a class="service-heading" href="{{ url('/services') }}">Digital Marketing</a>
                                    <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including
                                        products
                                        designed for high mileage vehicles, trucks and SUVs.
                                    </p>
                                </div>
                            </div>
                        </div>
 --}}


                    </div>

                </div>

            </div>

        </div>

        {{$products->links()}}
        {{-- <!-- pagination -->
        <div class="pagination-style text-center mt-5 pt-lg-5 pt-2">
            <ul>
                <li><a class="not-allowed" disabled="" href="#none">
                    <span aria-hidden="true" class="fa fa-angle-double-left"></span>
                </a>
                </li>
                {{$products->links()}}
                <li><a class="active" href="#page">1</a></li>
                <li>
                    <a href="#page">2</a>
                </li>
                <li>
                    <a href="#page">3</a>
                </li>
                <li>
                    <a href="#page"><span aria-hidden="true" class="fa fa-angle-double-right"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //pagination --> --}}
    </div>
</div>
<!-- //blog section -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>
</div>
@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection


