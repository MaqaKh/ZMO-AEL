
@extends('master')


@section('content')

<section class="banner-19">
    <div class="banner-layer">
        <video autoplay muted loop id="myVideo">
            <source src={{asset('videos/shellrefinery.mp4')}} type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="main-content-top">
            <div class="container">
                <div class="main-content">
                    <!-- if logo is image enable this
                    <a class="logo" href="index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
                    {{--                    <h4>Zimmer Oil</h4>--}}
                    {{--                    <p class="mt-3">HIGH QUALITY, MODERN INNOVATIVE GERMAN TECHNOLOGY AT A FAVORABLE PRICE!--}}

                    {{--                        ZIMMER IS A TRADITIONAL GERMAN BRAND. MANUFACTURER OF ZIMMER PRODUCTS TO ORDER, SPECIALIZES IN--}}
                    {{--                        THE PRODUCTION OF FUEL ADDITIVES, LUBRICANTS, GEAR OILS, MOTOR OILS, SPECIALTY FLUIDS, COOLANTS--}}
                    {{--                        AND CAR CHEMICALS.--}}
                    {{--                    </p>--}}
                    {{--                    <a href="{{ url('/about') }}" class="btn btn-style mt-md-5 mt-4">Read More</a>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->

<!-- banner bottom section -->
{{-- <section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 left-wthree-img mb-lg-0 mb-4">
                <img alt=" " class="img-fluid img-responsive" src={{asset('images/zimmer-intro.jfif')}}>
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">The Largest Business Expert!</h3>
                <p class="mt-2">ZIMMER is a traditional German brand. Manufacturer of ZIMMER products to order,
                    specializes in the production
                    of fuel additives, lubricants, gear oils, motor oils, specialty fluids,
                    coolants and car chemicals. ZIMMER OIL products are produced by a manufacturing company with a
                    total area
                    of 17,000 square meters, including 13,000 square meters of covered warehouses and 500 square
                    meters
                    of laboratory space for 100 employees located in the UAE,
                    by special order, with highly innovative German technology</p>
                <!--                    <div class="mt-4 pt-md-2">-->
                <!--                        <div class="about-info-m d-flex">-->
                <!--                            <div class="icon-style-ab mr-4">-->
                <!--                                <i class="fas fa-donate"></i>-->
                <!--                            </div>-->
                <!--                            <div class="about-detail">-->
                <!--                                <h4>Extra benefit through Invest</h4>-->
                <!--                                <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium</p>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="about-info-m d-flex mt-4">-->
                <!--                            <div class="icon-style-ab mr-4">-->
                <!--                                <i class="fab fa-asymmetrik"></i>-->
                <!--                            </div>-->
                <!--                            <div class="about-detail">-->
                <!--                                <h4>Expand profit and reduce Tax</h4>-->
                <!--                                <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium</p>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
            </div>
        </div>
    </div>
</section> --}}
<!-- //banner bottom section -->
<div style="margin: 8px auto; display: block; text-align:center;">
</div>


<!-- //banner section -->

<!-- banner bottom section -->
<section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 left-wthree-img mb-lg-0 mb-4">
                <img alt=" " class="img-fluid img-responsive" src={{asset('images/zimmer-intro.jfif')}}>
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">The Largest Business Expert!</h3>
                <p class="mt-2">ZIMMER is a traditional German brand. Manufacturer of ZIMMER products to order,
                    specializes in the production
                    of fuel additives, lubricants, gear oils, motor oils, specialty fluids,
                    coolants and car chemicals. ZIMMER OIL products are produced by a manufacturing company with a
                    total area
                    of 17,000 square meters, including 13,000 square meters of covered warehouses and 500 square
                    meters
                    of laboratory space for 100 employees located in the UAE,
                    by special order, with highly innovative German technology</p>
                <!--                    <div class="mt-4 pt-md-2">-->
                <!--                        <div class="about-info-m d-flex">-->
                <!--                            <div class="icon-style-ab mr-4">-->
                <!--                                <i class="fas fa-donate"></i>-->
                <!--                            </div>-->
                <!--                            <div class="about-detail">-->
                <!--                                <h4>Extra benefit through Invest</h4>-->
                <!--                                <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium</p>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="about-info-m d-flex mt-4">-->
                <!--                            <div class="icon-style-ab mr-4">-->
                <!--                                <i class="fab fa-asymmetrik"></i>-->
                <!--                            </div>-->
                <!--                            <div class="about-detail">-->
                <!--                                <h4>Expand profit and reduce Tax</h4>-->
                <!--                                <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium</p>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
            </div>
        </div>
    </div>
</section>

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
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img alt="card-image"
                                 class="d-block img-responsive"
                                 src={{asset('images/products/10W-40%20LOW%20PREMIUM%20UNIVERSAL.png')}}>
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style">Enginer</span>
                        <a href={{ url('/services') }} class="service-heading">Website Designing</a>
                        <p>We offer Mobil™ 10W-40 high viscosity motor oils for use in vehicles with more than
                            75,000 miles, and a synthetic blend oil.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href={{ url('/services') }}>
                            <img alt="card-image"
                                 class="d-block img-responsive" src={{ asset('images/products/5W-40%20FS%20ELITE%20LONG%20LIFE.png')}}>
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-2">Engine</span>
                        <a href={{ url('/services') }} class="service-heading">Mobile Applications</a>
                        <p>w40 motor oil has a winter viscosity grade of five, meaning it’s less viscous at very low
                            temperatures, compared to, say, 10w40</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href={{ url('/services') }}>
                            <img alt="card-image" class="d-block img-responsive"
                            src="{{ asset('images/products/5w30%20-eco%20power.png') }}"
                            >
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Transmission</span>
                        <a href={{ url('/services') }} class="service-heading">Digital Marketing</a>
                        <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including products
                            designed for high mileage vehicles, trucks and SUVs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href={{ url('/services') }}>
                            <img alt="card-image" class="d-block img-responsive"
                            src={{ asset('images/products/5w30%20-eco%20power.png') }}

                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Transmission</span>
                        <a class="service-heading" href="{{ url('/services') }}">Digital Marketing</a>
                        <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including products
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
                        <a class="service-heading" href={{ url('/services') }}>Digital Marketing</a>
                        <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including products
                            designed for high mileage vehicles, trucks and SUVs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href={{ url('/services') }}>
                            <img alt="card-image" class="d-block img-responsive"
                            src="{{ asset('images/products/5w30%20-eco%20power.png') }}"

                            >
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Transmission</span>
                        <a class="service-heading" href={{ url('/services') }}>Digital Marketing</a>
                        <p>We offer a wide selection of Mobil™ 5W-30 viscosity motor oils, including products
                            designed for high mileage vehicles, trucks and SUVs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //services section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>




<div class="w3l-content-photo-5 py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="row align-items-center">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img alt="content-photo" class="img-responsive"
                    src="{{ asset('images/zimmer-about.png') }}"
                    ></a>
            </div>
            <div class="col-lg-6 col-md-10 mx-auto content-right mb-lg-0 mb-5 pl-lg-5 order-lg-last order-first">
                <h5 class="small-title-2">About the Company</h5>
                <h3 class="title-style-2">Zimmer Oil</h3>
                <p class="my-3">ZIMMER is a traditional German brand. Manufacturer of ZIMMER products to order,
                    specializes in the production of fuel additives,
                    lubricants, gear oils, motor oils, specialty fluids, coolants and car chemicals. </p>
                <p class="border-top-w3l pt-4 mt-4">All our ZIMMER products are always manufactured in accordance
                    with recognized and regularly reviewed quality standards. .</p>

                <a href="#small-dialog" class="popup-with-zoom-anim d-flex align-items-center mt-md-5 mt-4">
                    <span class="video-play-icon mr-3">
                        <span class="far fa-play-circle"></span>
                    </span>Watch Our <br>Video
                </a>

                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://player.vimeo.com/video/86005700" frameborder="0"
                        allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //about section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>
<!-- team section -->
<!--    <section class="w3l-team py-5">-->
<!--        <div class="container py-md-5 py-4">-->
<!--            <div class="row align-items-center mb-5">-->
<!--                <div class="col-md-6 section-heading">-->
<!--                    <h5 class="small-title-2">Our Teammates </h5>-->
<!--                    <h3 class="title-style-2">Our Creative Team</h3>-->
<!--                </div>-->
<!--                <div class="col-md-6 section-heading mt-md-0 mt-2">-->
<!--                    <p>-->
<!--                        Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque,-->
<!--                        eaque ipsa quae ab illo inventore.Sed ut perspiciatis unde omnis iste natus error sit.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row text-center">-->
<!--                <div class="col-lg-3 col-sm-6">-->
<!--                    <div class="team-block-single">-->
<!--                        <div class="team-grids">-->
<!--                            <a href="#team-single">-->
<!--                                <img src="assets/images/team3.jpg" class="img-fluid" alt="">-->
<!--                                <div class="team-info">-->
<!--                                    <div class="social-icons-section">-->
<!--                                        <a class="fac" href="#facebook">-->
<!--                                            <span class="fab fa-facebook-f"></span>-->
<!--                                        </a>-->
<!--                                        <a class="twitter mx-2" href="#twitter">-->
<!--                                            <span class="fab fa-twitter"></span>-->
<!--                                        </a>-->
<!--                                        <a class="google" href="#google-plus">-->
<!--                                            <span class="fab fa-google-plus-g"></span>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="team-bottom-block p-4">-->
<!--                            <h5 class="member mb-1"><a href="#team">Olive Yew</a></h5>-->
<!--                            <small>Web Developer</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">-->
<!--                    <div class="team-block-single">-->
<!--                        <div class="team-grids">-->
<!--                            <a href="#team-single">-->
<!--                                <img src="assets/images/team2.jpg" class="img-fluid" alt="">-->
<!--                                <div class="team-info">-->
<!--                                    <div class="social-icons-section">-->
<!--                                        <a class="fac" href="#facebook">-->
<!--                                            <span class="fab fa-facebook-f"></span>-->
<!--                                        </a>-->
<!--                                        <a class="twitter mx-2" href="#twitter">-->
<!--                                            <span class="fab fa-twitter"></span>-->
<!--                                        </a>-->
<!--                                        <a class="google" href="#google-plus">-->
<!--                                            <span class="fab fa-google-plus-g"></span>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="team-bottom-block p-4">-->
<!--                            <h5 class="member mb-1 active"><a href="#team">Aida Joe</a></h5>-->
<!--                            <small>Marketing Head</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">-->
<!--                    <div class="team-block-single">-->
<!--                        <div class="team-grids">-->
<!--                            <a href="#team-single">-->
<!--                                <img src="assets/images/team4.jpg" class="img-fluid" alt="">-->
<!--                                <div class="team-info">-->
<!--                                    <div class="social-icons-section">-->
<!--                                        <a class="fac" href="#facebook">-->
<!--                                            <span class="fab fa-facebook-f"></span>-->
<!--                                        </a>-->
<!--                                        <a class="twitter mx-2" href="#twitter">-->
<!--                                            <span class="fab fa-twitter"></span>-->
<!--                                        </a>-->
<!--                                        <a class="google" href="#google-plus">-->
<!--                                            <span class="fab fa-google-plus-g"></span>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="team-bottom-block p-4">-->
<!--                            <h5 class="member mb-1"><a href="#team">Teri Dac</a></h5>-->
<!--                            <small>Sales Manager</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">-->
<!--                    <div class="team-block-single">-->
<!--                        <div class="team-grids">-->
<!--                            <a href="#team-single">-->
<!--                                <img src="assets/images/team1.jpg" class="img-fluid" alt="">-->
<!--                                <div class="team-info">-->
<!--                                    <div class="social-icons-section">-->
<!--                                        <a class="fac" href="#facebook">-->
<!--                                            <span class="fab fa-facebook-f"></span>-->
<!--                                        </a>-->
<!--                                        <a class="twitter mx-2" href="#twitter">-->
<!--                                            <span class="fab fa-twitter"></span>-->
<!--                                        </a>-->
<!--                                        <a class="google" href="#google-plus">-->
<!--                                            <span class="fab fa-google-plus-g"></span>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="team-bottom-block p-4">-->
<!--                            <h5 class="member mb-1"><a href="#team">Anton Bne</a></h5>-->
<!--                            <small>Event Organizer</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- //team setion -->

<!-- content section -->
<section class="w3l-content-mid py-5">
    <div class="container py-md-5 py-4">
        <div class="welcome-left">
            <h3 class="title-w3l">Innovative German products with the best quality!</h3>
            <p class="mt-3 text-white">Our Products are built with the idea of bringing german innovations to
                your vehicle. The improved performance achieved though high quality german technology will help your
                vehicle
                to withstand harsh conditions and keep it on track even for cross-border trips!
            </p>
            <a class="btn btn-style mt-4" href="{{ url('/contact') }}">Contact Us</a>
        </div>
    </div>
</section>
<!-- //content section -->

<!-- testimonials section -->
<section class="w3l-clients py-5" id="testimonials">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 section-heading">
                <!--                    <h5 class="small-title-2">Oue Clients Testimonials</h5>-->
                <h3 class="title-style-2">Our certifications</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>

                </p>
            </div>
        </div>
        <div id="owl-demo2" class="owl-carousel owl-theme pb-5">
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Pellen tesque libero ut justo</q>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                            faucibus orci luctus.</p>
                    </div>
                    <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/testi1.jpg"
                                class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Johnson william</h3>
                            <p class="identity">Example City</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Lorem ipsum dolor sit amet</q>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                            faucibus orci luctus.</p>
                    </div>
                    <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/testi2.jpg"
                                class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Alexander sakura</h3>
                            <p class="identity">Example City</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Pellen tesque libero ut justo</q>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                            faucibus orci luctus.</p>
                    </div>
                    <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/testi3.jpg"
                                class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>John wilson</h3>
                            <p class="identity">Example City</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Lorem ipsum dolor sit amet</q>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                            faucibus orci luctus.</p>
                    </div>
                    <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/testi3.jpg"
                                class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Julia sakura</h3>
                            <p class="identity">Example City</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Pellen tesque libero ut justo</q>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                            faucibus orci luctus.</p>
                    </div>
                    <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/testi1.jpg"
                                class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>John wilson</h3>
                            <p class="identity">Example City</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Lorem ipsum dolor sit amet.</q>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                            faucibus orci luctus.</p>
                    </div>
                    <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/testi2.jpg"
                                class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Julia sakura</h3>
                            <p class="identity">Example City</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


