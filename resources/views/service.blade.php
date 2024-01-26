
@extends('master')


@section('content')

  <!-- inner banner -->
  <section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">Services</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->


</div>
<!-- services section -->
<div class="service-section py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">Web Services</h5>
                <h3 class="title-style-2">
                    Our Best Services</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque,
                    eaque ipsa quae ab illo inventore.Sed ut perspiciatis unde omnis iste natus error sit.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img class="d-block img-responsive" src="assets/images/s4.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style">Work</span>
                        <a href="{{ url('/services') }}" class="service-heading">Website Designing</a>
                        <p>Sed ut perspiciatis unde omnis iste natus sit accusantium doloremque
                            laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img class="d-block img-responsive" src="assets/images/s5.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-2">Business</span>
                        <a href="{{ url('/services') }}" class="service-heading">Mobile Applications</a>
                        <p>Sed ut perspiciatis unde omnis iste natus sit accusantium doloremque
                            laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img class="d-block img-responsive" src="assets/images/s6.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Corporate</span>
                        <a href="{{ url('/services') }}" class="service-heading">Digital Marketing</a>
                        <p>Sed ut perspiciatis unde omnis iste natus sit accusantium doloremque
                            laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img class="d-block img-responsive" src="assets/images/s1.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-2">Services</span>
                        <a href="services.html" class="service-heading">Marketing Services</a>
                        <p>Sed ut perspiciatis unde omnis iste natus sit accusantium doloremque
                            laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img class="d-block img-responsive" src="assets/images/s2.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Marketing</span>
                        <a href="{{ url('/services') }}" class="service-heading">Corporate Business</a>
                        <p>Sed ut perspiciatis unde omnis iste natus sit accusantium doloremque
                            laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="{{ url('/services') }}">
                            <img class="d-block img-responsive" src="assets/images/s3.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style">Design</span>
                        <a href="{{ url('/services') }}" class="service-heading">Creative Design</a>
                        <p>Sed ut perspiciatis unde omnis iste natus sit accusantium doloremque
                            laudantium, totam rem aperiam</p>
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
<!-- feature section -->
<section class="w3l-feature-8 py-5">
    <div class="container py-md-5 py-4">
        <div class="row features text-center py-lg-5">
            <div class="col-lg-3 col-sm-6 feature-1">
                <div class="feature-body">
                    <div class="feature-images pb-sm-3 pb-1">
                        <i class="fas fa-magic"></i>
                    </div>
                    <div class="feature-info mt-3">
                        <a href="{{ url('/about') }}">
                            <h3 class="feature-titel">
                                Graphic design
                            </h3>
                        </a>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipis</p>
                        <a href="{{ url('/about') }}" class="btn btn-style btn-style-normal mt-4">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 feature-2 mt-sm-0 mt-5">
                <div class="feature-body">
                    <div class="feature-images pb-sm-3 pb-1">
                        <i class="fas fa-window-restore"></i>
                    </div>
                    <div class="feature-info mt-3">
                        <a href="{{ url('/about') }}">
                            <h3 class="feature-titel">Web development</h3>
                        </a>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipis</p>
                        <a href="{{ url('/about') }}" class="btn btn-style btn-style-normal mt-4">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 feature-3 mt-lg-0 mt-5">
                <div class="feature-body">
                    <div class="feature-images pb-sm-3 pb-1">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div class="feature-info mt-3">
                        <a href="{{ url('/about') }}">
                            <h3 class="feature-titel">Content writing</h3>
                        </a>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipis</p>
                        <a href="{{ url('/about') }}" class="btn btn-style btn-style-normal mt-4">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 feature-3 mt-lg-0 mt-5">
                <div class="feature-body">
                    <div class="feature-images pb-sm-3 pb-1">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="feature-info mt-3">
                        <a href="{{ url('/about') }}">
                            <h3 class="feature-titel">Organized Tasks</h3>
                        </a>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipis</p>
                        <a href="{{ url('/about') }}" class="btn btn-style btn-style-normal mt-4">More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //feature section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>
<!-- content-6-section -->
<section class="w3l-content-12-main">
    <div class="content-12 text-left py-5">
        <div class="container py-md-5 py-4">
            <div class="content-info-tabs text-center">
                <input id="tab1" type="radio" name="tabs" checked>
                <label class="tabtle" for="tab1">Our Mission</label>
                <input id="tab2" type="radio" name="tabs">
                <label class="tabtle" for="tab2">Our Goals</label>
                <input id="tab3" type="radio" name="tabs">
                <label class="tabtle" for="tab3">Our Vision</label>
                <section id="content1" class="tab-content">
                    <div class="row content12 align-items-center">
                        <div class="col-lg-6 column">
                            <h6 class="content-heading">Powerful Solution for your Startup Business</h6>
                            <p class="content-para mb-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere
                                aperiam
                                sequi optio consectetur.Ea consequuntur illum facere aperiam sequi optio consectetur
                                adipisicing elitFuga, suscipit totam animi consequatur saepe blanditiis.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque quidem odit
                                consequuntur
                                ducimus neque, harum eos eligendi maiores ex cum nobis.</p>
                        </div>
                        <div class="col-lg-6 column mt-lg-0 mt-4">
                            <img src="{{ asset('images/s3.jpg') }}"  class="img-fluid radius-image" alt="">
                        </div>

                    </div>
                </section>
                <section id="content2" class="tab-content">
                    <div class="row content12 align-items-center">
                        <div class="col-lg-6 column">
                            <h6 class="content-heading">Passion, Dedication and Hard Work</h6>
                            <p class="content-para mb-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere
                                aperiam
                                sequi optio consectetur.Ea consequuntur illum facere aperiam sequi optio consectetur
                                adipisicing elitFuga, suscipit totam animi consequatur saepe blanditiis.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque quidem odit
                                consequuntur
                                ducimus neque, harum eos eligendi maiores ex cum nobis.</p>
                        </div>
                        <div class="col-lg-6 column mt-lg-0 mt-4">
                            <img src="{{ asset('images/s6.jpg') }}" class="img-fluid radius-image" alt="">
                        </div>
                    </div>
                </section>
                <section id="content3" class="tab-content">
                    <div class="row content12 align-items-center">
                        <div class="col-lg-6 column">
                            <h6 class="content-heading">Provide awesome services with our tools</h6>
                            <p class="content-para mb-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere
                                aperiam
                                sequi optio consectetur.Ea consequuntur illum facere aperiam sequi optio consectetur
                                adipisicing elitFuga, suscipit totam animi consequatur saepe blanditiis.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque quidem odit
                                consequuntur
                                ducimus neque, harum eos eligendi maiores ex cum nobis.</p>
                        </div>
                        <div class="col-lg-6 column mt-lg-0 mt-4">
                            <img src="{{ asset('images/s5.jpg') }}"  class="img-fluid radius-image" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- //content-6-section -->


@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">

@endsection


