
@extends('master')


@section('content')



<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">About Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/index') }}">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About Us</li>
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


 <!-- why section -->
 <section class="home-services py-5">
    <div class="container py-md-5 py-4">
        <div class="section-heading text-center mb-5">
            <h5 class="small-title-2">Our Services </h5>
            <h3 class="title-style-2">Why Choose Us</h3>
        </div>
        <div class="row justify-content-center">
            <div class="box-wrap col-lg-4 col-md-6">
                <div class="box-wrap-grid text-center">
                    <div class="icon mb-4">
                        <span class="fas fa-oil-can"></span>
                    </div>
                    <div class="info">
                        <h4><a href="{{ url('/services') }}">Lubricants</a></h4>
                    </div>
                    <p class="mt-3">Quality lubricants for engine</p>
                </div>
            </div>
            <div class="box-wrap col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="box-wrap-grid text-center">
                    <div class="icon mb-4">
                        <span class="fas fa-car"></span>
                    </div>
                    <div class="info">
                        <h4><a href="{{ url('/services') }}">Car care</a></h4>
                    </div>
                    <p class="mt-3">Use our products to achieve the best performance</p>
                </div>
            </div>
            <div class="box-wrap col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4">
                <div class="box-wrap-grid text-center">
                    <div class="icon mb-4">
                        <span class="fas fa-lightbulb"></span>
                    </div>
                    <div class="info">
                        <h4><a href="{{ url('/services') }}">Accessories</a></h4>
                    </div>
                    <p class="mt-3">Car accessories to easy and enjoy your ride</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //why section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>
<!-- skills -->
<section class="w3l-skills py-5" id="skills">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 pr-lg-5">
                <img src={{asset('images/zimmer-about.png')}} alt="" class="img-responsive img-fluid">

            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <h5 class="small-title-2">Our Community</h5>
                <h3 class="title-style-2 mb-2">
                    Talent Can Come From Anywhere</h3>
                <p class="mt-4">Comprising a dedicated team of hundreds, we stand united in our commitment to serve
                    you. Our expertise lies in crafting top-notch engine lubricants, ensuring the highest quality
                    for your vehicles. With a relentless pursuit of innovation and a customer-centric approach, we
                    aim to exceed expectations and contribute to the optimal performance and longevity of your
                    engines.</p>
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

<!-- testimonials section -->
<!-- <section class="w3l-clients py-5" id="testimonials">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">Oue Clients Testimonials</h5>
                <h3 class="title-style-2">What People Say</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque,
                    eaque ipsa quae ab illo inventore.Sed ut perspiciatis unde omnis iste natus error sit.
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
-->
<!-- //testimonials section -->

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
<!--                                            <span class="fab fa-facebook-ff"></span>-->
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
</div>

@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection


