
@extends('master')


@section('content')



<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">@lang('messages.about')</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/index') }}">@lang('messages.home')</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>@lang('messages.about')</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">
</div>
<!---728x90--->

 <!-- about section -->
 <section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-md-5 py-4">
        <div class="container">
            <div class="row top-cont-grid align-items-center">
                <div class="col-lg-6 left-img pr-lg-4 order-lg-first order-last">
                    <video autoplay muted loop class="img-responsive">
                        <source src="{{ asset('videos/fabric.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/your-video.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/your-video.ogg') }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div class="row mt-3">
                        <div class="col-6 img-pad pr-2">
                            <img src={{asset('images/about2.jfif')}} alt="" class="img-responsive img-fluid" />
                        </div>
                        <div class="col-6 img-pad-2 pl-2">
                            <img src={{asset('images/about3.jfif')}} alt="" class="img-responsive img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-6-info mb-lg-0 mb-5 pl-xl-5 order-lg-last order-first">
                    <h5 class="small-title-2">About Us</h5>
                    <h3 class="title-style-2 mb-3">
                        Our topmost focus is on ensuring high quality, and we place our trust in continuous innovation.</h3>
                    <p>At the heart of our ethos is an unwavering commitment to prioritize quality in every facet of our operations. We firmly believe that maintaining high standards is integral to our success, and this dedication to excellence permeates our organizational culture. Embracing innovation as a guiding principle, we continually seek fresh perspectives and creative solutions to surpass expectations. Quality is not merely a goal but a fundamental value that underscores all our endeavors. With innovation as a cornerstone, we strive to foster growth and consistently exceed the benchmarks we set for ourselves..</p>
                                             <a class="btn btn-style mt-lg-5 mt-4" href="{{ url('/prdouct-detail') }}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>

<!-- skills -->
<section class="w3l-skills py-5" id="skills">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            {{--            <div class="col-lg-6 pr-lg-5">--}}
            {{--                <img src={{asset('images/zimmer-about.png')}} alt="" class="img-responsive img-fluid">--}}

            {{--            </div>--}}
            <div class="col-lg-12 mt-lg-0 mt-5">
                <h5 class="small-title-2">The best of the best!</h5>
                <h3 class="title-style-2 mb-2">@lang('messages.about-main-text-header')</h3>
                <p class="mt-4">@lang('messages.about-main-text')</p>
                <!--                    <div class="skills-bars mt-5">-->
                <!--                        <div class="progress-info">-->
                <!--                            <h6 class="progress-tittle">Web Design-->
                <!--                            </h6>-->
                <!--                            <div class="progress">-->
                <!--                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"-->
                <!--                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="progress-info">-->
                <!--                            <h6 class="progress-tittle">Development-->

                <!--                            </h6>-->
                <!--                            <div class="progress">-->
                <!--                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"-->
                <!--                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="progress-info">-->
                <!--                            <h6 class="progress-tittle">Mobile Apps-->
                <!--                            </h6>-->
                <!--                            <div class="progress">-->
                <!--                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"-->
                <!--                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="progress-info">-->
                <!--                            <h6 class="progress-tittle">Marketing-->
                <!--                            </h6>-->
                <!--                            <div class="progress">-->
                <!--                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width:65%"-->
                <!--                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
            </div>
        </div>
    </div>
</section>
<!-- //skills -->

 <!-- why section -->
 <section class="home-services py-5">
    <div class="container py-md-5 py-4">
        <div class="section-heading text-center mb-5">
            <h5 class="small-title-2">@lang('messages.about_3_header_1') </h5>
            <h3 class="title-style-2">@lang('messages.about_3_header_2') </h3>
        </div>
        <div class="row justify-content-center">
            <div class="box-wrap col-lg-4 col-md-6">
                <div class="box-wrap-grid text-center">
                    <div class="icon mb-4">
                        <span class="fas fa-oil-can"></span>
                    </div>
                    <div class="info">
                        <h4><a href="{{ url('/services') }}">@lang('messages.about_3_var_1_head')</a></h4>
                    </div>
                    <p class="mt-3">@lang('messages.about_3_var_1_desc')</p>
                </div>
            </div>
            <div class="box-wrap col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="box-wrap-grid text-center">
                    <div class="icon mb-4">
                        <span class="fas fa-car"></span>
                    </div>
                    <div class="info">
                        <h4><a href="{{ url('/services') }}">@lang('messages.about_3_var_2_head')</a></h4>
                    </div>
                    <p class="mt-3">@lang('messages.about_3_var_2_desc')</p>
                </div>
            </div>
            <div class="box-wrap col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4">
                <div class="box-wrap-grid text-center">
                    <div class="icon mb-4">
                        <span class="fas fa-lightbulb"></span>
                    </div>
                    <div class="info">
                        <h4><a href="{{ url('/services') }}">@lang('messages.about_3_var_3_head')</a></h4>
                    </div>
                    <p class="mt-3">@lang('messages.about_3_var_3_desc')</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //why section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>

</div>

@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection


