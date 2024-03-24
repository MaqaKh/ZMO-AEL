<!-- footer -->
<footer class="w3l-footer-22 py-1">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img alt="Your logo" title="Your logo"
                     src="{{ asset('images/zimmer-logo-full.png') }}"
                     style=" max-height: 180px;"/>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img alt="Your logo" title="Your logo"
                     src="{{ asset('images/partners.png') }}"
                     style=" max-height: 150px; margin-top: -2%"/>
            </div>
        </div>
        <div class="row sub-columns">
            <div class="col-lg-5 col-sm-6 sub-one-left">
                <h6>@lang('messages.about') </h6>
                <p>@lang('messages.about_in_footer')</p>
                <div class="columns-2">
                    <ul class="social">
                        <li><a href="#facebook" title="facebook"><span class="fab fa-facebook-f"
                                    aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#linkedin" title="linkedin"><span class="fab fa-linkedin-in"
                                    aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#youtube" title="youtube"><span class="fab fa-youtube"
                            aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#google" title="google"><span class="fab fa-google-plus-g"
                                    aria-hidden="true"></span></a>
                        </li>
                        <li><a href="https://www.instagram.com/zimmer_oil/?hl=en" title="instagram"><span
                                class="fab fa-instagram"
                                    aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-5">
                <h6>@lang('messages.products')</h6>
                <ul>
                    <li><a href="{{ url('/product') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.engine-oil-menu')</a>
                    </li>
                    <li><a href="{{ url('/product') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.transmission-oil-menu')</a>
                    </li>
                    <li><a href="{{ url('/product') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.transmission-oil-menu')</a>
                    </li>
                    <li><a href="{{ url('/product') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.all_products')</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 sub-two-right mt-lg-0 mt-sm-5 mt-4">
                <h6>@lang('messages.quick_link_footer')</h6>
                <ul>
                    <li><a href="{{ url('/') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.home')</a></li>
                    <li><a href="{{ url('/about') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.about')</a>
                    </li>
                    <li><a href="{{ url('/product') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.products')</a>
                    </li>
                    <li><a href="{{ url('/contact') }}"><span class="fas fa-angle-right mr-2"></span>@lang('messages.contacts')</a></li>
                </ul>
            </div>
            {{--            <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">--}}
            {{--                <img src={{asset('images/flags.png')}} alt="" class="img-responsive img-fluid"--}}
            {{--                     style="margin-top: -20%;"/>--}}
            {{--            </div>--}}
        </div>
        <div class="sub-contact mt-5 pt-lg-4">
            <div class="row">
                <div class="col-md-4 footer-contact d-flex align-items-center">
                    <span class="fas fa-envelope-open" aria-hidden="true"></span>
                    <div>
                        <a href="#">
                            info@zimmer-oil.com
                        </a>
                        <a href="#">
                            office@zimmer-oil.com
                        </a>
                        <p>Drop Us a Line</p>
                    </div>
                </div>

                <div class="col-md-4 footer-contact d-flex align-items-center active">
                    <span class="fas fa-phone-alt" aria-hidden="true"></span>
                    <div>
                        <a href="tel:+44-000-888-999">+994 (12) 310-09-35</a><br>
                        <a href="tel:+44-000-888-999">+994 (55) 238-72-12</a>
                        <p>Call Us Now</p>
                    </div>
                </div>
                <div class="col-md-4 footer-contact d-flex align-items-center">
                    <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                    <div>
                        <h5> Baku, Khatai district, November 8 Avenue 23, index AZ 1025</h5>
                        <p>Get Direction</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- copyright -->
    <div class="copyright-footer text-center mt-5">
        <div class="container">
            <div class="columns">
                <p>@2024 Zimmer. All rights reserved. Design by
                    <a href="https://deimos.az/" target="_blank"> Deimos</a>
                </p>
            </div>
        </div>
    </div>
    <!-- //copyright -->
</footer>
<!-- //footer -->

<script>
    $(document).on("click", '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
