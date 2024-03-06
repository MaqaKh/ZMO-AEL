
<main_header>
    <header id="site-header" class="fixed-top full-header min-height-150">
        <div class="container-fluid">
                <nav class="navbar navbar-expand-lg stroke">
                    <a class="navbar-brand" href="/">
                        <img class="logoImg navbar-logo-main" alt="Your logo" title="Your logo"
                             src={{ asset('images/zimmer-logo-full.png') }} />
                    </a>
                    <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                        <ul class=" navbar-nav ml-lg-auto">
                            <li class="nav-item  {{ request()->is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('/') }}">@lang('messages.home') <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('/about') }}">@lang('messages.about')</a>
                            </li>
                            <li class="nav-item  {{ request()->is('product') ? 'active' : '' }} ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('messages.automotive') <span class="fa fa-angle-down"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    @foreach($categories as $category)
                                    <a class="dropdown-item" href="{{ route('product.filter', ['category' => $category->description_en]) }}">{{$category->name_en}}</a>

                                    @endforeach
                                    <!--                                <a class="dropdown-item" href="email-template.html">Email Template</a>-->
                                    <!--                                <a class="dropdown-item" href="landing-single.html">Landing Page</a>-->
                                    <!--                                <a class="dropdown-item" href="shortcodes.html">Shortcodes</a>-->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('messages.industry') <span class="fa fa-angle-down"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.hydraulic')</a>
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.industrial')</a>
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.compressor')</a>
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.marine')</a>
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.turbine')</a>
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.special')</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('messages.specialProducts') <span class="fa fa-angle-down"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="expected.html"> @lang('messages.antifreeze')</a>
                                </div>
                            </li>
                            <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('/gallery') }}"
                                >@lang('messages.gallery')</a>
                            </li>
                            <!--                        <li class="nav-item">-->
                            <!--                            <a class="nav-link" href="contact.html">Promotional accessories</a>-->
                            <!--                        </li>-->
                            {{-- <li class="nav-item request()->is('product') ? 'active' : '' }}">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li> --}}
                            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('/contact') }}"
                                >@lang('messages.contacts')</a>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link language-container">

                                    @if(Session::get('locale') == 'en')
                                    <a href="{{ route('lang.switch', 'ru') }}"
                                    >RU</a>
                                    <a href="{{ route('lang.switch', 'ge') }}"
                                    >GE</a>

                                    @elseif(Session::get('locale') == 'ru')
                                    <a href="{{ route('lang.switch', 'en') }}"
                                    >EN</a>
                                    <a href="{{ route('lang.switch', 'ge') }}"
                                    >GE</a>

                                    @elseif(Session::get('locale') == 'ge')
                                    <a href="{{ route('lang.switch', 'en') }}"
                                    >EN</a>
                                    <a href="{{ route('lang.switch', 'ru') }}"
                                    >RU</a>
                                    @else
                                    <a href="{{ route('lang.switch', 'ru') }}"
                                    >RU</a>
                                    <a href="{{ route('lang.switch', 'ge') }}"
                                    >GE</a>

                                    @endif
                                   <!--- <a href="contact.html">EN</a>  -->
                                </div>
                            </li>

                            <!-- search button -->
                            <!--  <div class="search-right ml-lg-3">
                                  <form action="https://p.w3layouts.com/demos_new/template_demo/07-04-2021/execution-liberty-demo_Free/985771955/web/error.html" method="GET" class="search-box position-relative">
                                      <div class="input-search">
                                          <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                              autofocus="" class="search-popup">
                                      </div>
                                      <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                              aria-hidden="true"></i></button>
                                  </form>
                              </div>-->
                            <!-- //search button -->
                        </ul>

                        <ul class="nav navbar-nav ml-lg-auto">
                            <a class="navbar-brand" href="/">
                                <img class="logoImg navbar-logo-main" alt="Your logo" title="Your logo"
                                     src={{ asset('images/partnersN.png') }} />
                            </a>
                        </ul>
                    </div>
                    <!-- toggle switch for light and dark theme -->
                    <div class="cont-ser-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <div class="mode-container">
                                        <i class="gg-sun"></i>
                                        <i class="gg-moon"></i>
                                    </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                    <!-- //toggle switch for light and dark theme -->

                </nav>
            </div>

    </header>

    <script src="{{asset('js/theme-change.js')}}"></script>
    <script>
        // Your JavaScript code for the header
        function autoType(elementClass, typingSpeed) {
                var thhis = $(elementClass);
                thhis.css({
                    "position": "relative",
                    "display": "inline-block"
                });
                thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
                thhis = thhis.find(".text-js");
                var text = thhis.text().trim().split('');
                var amntOfChars = text.length;
                var newString = "";
                thhis.text("|");
                setTimeout(function () {
                    thhis.css("opacity", 1);
                    thhis.prev().removeAttr("style");
                    thhis.text("");
                    for (var i = 0; i < amntOfChars; i++) {
                        (function (i, char) {
                            setTimeout(function () {
                                newString += char;
                                thhis.text(newString);
                            }, i * typingSpeed);
                        })(i + 1, text[i]);
                    }
                }, 1500);
            }

            $(document).ready(function () {
                // Now to start autoTyping just call the autoType function with the
                // class of outer div
                // The second paramter is the speed between each letter is typed.
                autoType(".type-js", 200);
            });
    </script>

    <script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

        <script>
        (function(){
            if(typeof _bsa !== 'undefined' && _bsa) {
                  // format, zoneKey, segment:value, options
                  _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
              }
        })();
        </script>
        <script>
        (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
        }
        })();
        </script>
        <script>
        (function(){
            if(typeof _bsa !== 'undefined' && _bsa) {
                  // format, zoneKey, segment:value, options
                  _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
              }
        })();
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-98H8KRKT85');
        </script>

        <meta name="robots" content="noindex">

        <script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->

        <!-- common jquery plugin -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <!-- //common jquery plugin -->

        <!-- owl carousel -->
        <script src="{{asset('js/owl.carousel.js')}}"></script>
        <!-- script for tesimonials carousel slider -->
        <script>
            $(document).ready(function () {
                $("#owl-demo2").owlCarousel({
                    loop: true,
                    nav: false,
                    margin: 50,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        736: {
                            items: 1,
                            nav: false
                        },
                        991: {
                            items: 2,
                            margin: 30,
                            nav: false
                        },
                        1080: {
                            items: 3,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <!-- //script for tesimonials carousel slider -->
        <!-- owl carousel -->

        <!-- magnific popup -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"
        ></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>
        <!-- //magnific popup -->

        <!-- theme switch js (light and dark)-->
        <script src="{{asset('js/theme-change.js')}}"></script>

        <script>
            function autoType(elementClass, typingSpeed) {
                var thhis = $(elementClass);
                thhis.css({
                    "position": "relative",
                    "display": "inline-block"
                });
                thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
                thhis = thhis.find(".text-js");
                var text = thhis.text().trim().split('');
                var amntOfChars = text.length;
                var newString = "";
                thhis.text("|");
                setTimeout(function () {
                    thhis.css("opacity", 1);
                    thhis.prev().removeAttr("style");
                    thhis.text("");
                    for (var i = 0; i < amntOfChars; i++) {
                        (function (i, char) {
                            setTimeout(function () {
                                newString += char;
                                thhis.text(newString);
                            }, i * typingSpeed);
                        })(i + 1, text[i]);
                    }
                }, 1500);
            }

            $(document).ready(function () {
                // Now to start autoTyping just call the autoType function with the
                // class of outer div
                // The second paramter is the speed between each letter is typed.
                autoType(".type-js", 200);
            });
        </script>
        <!-- //theme switch js (light and dark)-->

        <!-- MENU-JS -->
        <script>
            $(window).on("scroll", function () {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function () {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function () {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });
        </script>

    <script>

        // jQuery
        $(window).scroll(function () {
            var scrolled = $(window).scrollTop() > 10; // Check if page is scrolled

            if (scrolled) {
                $('.logoImg').addClass('scrolled'); // Add scrolled class
                $('.logoImg').removeClass('navbar-logo-main'); // Add scrolled class
                $('.full-header').removeClass('min-height-150');
            } else {
                $('.logoImg').addClass('navbar-logo-main');
                $('.logoImg').removeClass('scrolled'); // Remove scrolled class
                $('.full-header').addClass('min-height-150');
            }
        });

    </script>
        <!-- //MENU-JS -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- //disable body scroll which navbar is in active -->

        <!--bootstrap-->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- //bootstrap-->
        <!-- //Js scripts -->

    <script>(function(){var js = "window['__CF$cv$params']={r:'83a0f4c4dfd38ec8',t:'MTcwMzMzODE5NS4xNDEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/74bd6362/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


    </main_header>




        <!-- theme switch js (light and dark)-->

        <!-- //theme switch js (light and dark)-->

