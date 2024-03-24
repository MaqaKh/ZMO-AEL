
@extends('master')


@section('content')


</div>
<div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
    style="overflow: hidden; outline: none;">
</div>
</div>
</div>
</div>

<!-- inner banner -->
<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">@lang('messages.contacts')</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">@lang('messages.home')</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>@lang('messages.contacts')</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->


</div>
<!-- contact -->
<section class="w3l-contact-info-main py-5" id="contact">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">@lang('messages.contact_head_1')</h5>
                <h3 class="title-style-2">@lang('messages.contact_head_2')</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>
                    @lang('messages.contact_desc')
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-address p-4 min-h-160">
                    <div class="contact-icon d-flex align-items-center">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <div class="ml-3">
                            <h5 class="contact-text">@lang('messages.contact_visit')</h5>
                            <p>
                                Azerbaijan, Baku, Khatai district, November 8 Avenue 23, index AZ 1025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="contact-address p-4 min-h-160">
                    <div class="contact-icon d-flex align-items-center">
                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                        <div class="ml-3">
                            <h5 class="contact-text">@lang('messages.contact_call')</h5>
                            <a href="tel:+12 23456790">+994 (12) 310-09-35</a><br>
                            <a href="tel:+12 23456790">+994 (55) 238-72-12</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="contact-address p-4 min-h-160">
                    <div class="contact-icon d-flex align-items-center">
                        <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                        <div class="ml-3">
                            <h5 class="contact-text">@lang('messages.contact_mail')</h5>
                            <a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#f79e999198b7928f969a879b92d994989a"> <span class="__cf_email__" data-cfemail="cfa6a1a9a08faab7aea2bfa3aae1aca0a2">info@zimmer-oil.com</span></a>

                            <a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#f79e999198b7928f969a879b92d994989a"> <span class="__cf_email__" data-cfemail="cfa6a1a9a08faab7aea2bfa3aae1aca0a2">office@zimmer-oil.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-w3pvt-form mt-5 pt-lg-4">
            <form method="post" class="w3layouts-contact-fm" action="https://sendmail.w3layouts.com/submitForm">
                <div class="row main-cont-sec">
                    <div class="col-md-6 left-cont-contact">
                        <div class="form-group mb-3">
                            <label for="w3lName">@lang('messages.form_name')</label>
                            <input class="form-control" type="text" name="w3lName" id="w3lName" placeholder=""
                                required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="w3lSender">@lang('messages.form_mail')</label>
                            <input class="form-control" type="email" name="w3lSender" id="w3lSender" placeholder=""
                                required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="w3lSubject">@lang('messages.form_subject')</label>
                            <input class="form-control" type="text" name="w3lSubject" id="w3lSubject" required="">
                        </div>
                    </div>
                    <div class="col-md-6 right-cont-contact">
                        <div class="form-group">
                            <label for="w3lSubject">@lang('messages.form_message')</label>
                            <textarea class="form-control" name="w3lMessage" id="w3lMessage" placeholder=""
                                required=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group-2 mt-3 text-right">
                    <button type="submit" class="btn btn-style">@lang('messages.form_submit')</button>
                </div>
            </form>
        </div>
    </div>
</section>

{{--<div class="map-contact">--}}
{{--    <iframe class="map-w3layouts"--}}
{{--    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.305645257226!2d49.8761218751878!3d40.37991805788023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307ce1e5959b69%3A0x6f2eb5b63b2f56d1!2sAMAY%20Shopping%20Center!5e0!3m2!1str!2saz!4v1706022232342!5m2!1str!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--</div>--}}
<!-- //contact -->
<div style="margin: 8px auto; display: block; text-align:center;">
</div>

@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection


