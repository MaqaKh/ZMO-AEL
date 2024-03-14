@extends('master')


@section('content')

    <section class="w3l-text-6 py-5" id="about">
        <div class="text-6-mian py-md-5 py-4">
            <div class="container">
                <div class="row top-cont-grid align-items-center">
                    <div class="col-lg-6 left-img pr-lg-4 order-lg-first order-last">
                        <div class="row mt-3">
                            <div class="col-6 img-pad pr-2">
                                <img src="{{asset("/images/team2.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                            <div class="col-6 img-pad-2 pl-2">
                                <img src="{{asset("/images/team3.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 img-pad pr-2">
                                <img src="{{asset("/images/team2.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                            <div class="col-6 img-pad-2 pl-2">
                                <img src="{{asset("/images/team3.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 left-img pr-lg-4 order-lg-first order-last">
                        <div class="row mt-3">
                            <div class="col-6 img-pad pr-2">
                                <img src="{{asset("/images/team2.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                            <div class="col-6 img-pad-2 pl-2">
                                <img src="{{asset("/images/team3.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 img-pad pr-2">
                                <img src="{{asset("/images/team1.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                            <div class="col-6 img-pad-2 pl-2">
                                <img src="{{asset("/images/team2.jpg")}}" alt="" class="img-responsive img-fluid"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection
