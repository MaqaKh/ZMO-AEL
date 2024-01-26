
@extends('master')


@section('content')
 <!-- 404 error page -->
 <div class="w3l-error-grid py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row error-block align-items-center">
            <div class="col-lg-6">
                <h1>4<i class="fas fa-sad-tear"></i>4</h1>
            </div>
            <div class="col-lg-6">
                <h2 class="mt-5">Oops, Page not found!</h2>
                <p class="mt-sm-4 mt-3">Sorry, we're offline right now to make our site even better. Please,
                    comeback
                    later and
                    check what we've
                    been upto.</p>
                <form class="form-inline search-form mt-md-5 mt-4" action="#" method="post">
                    <input class="form-control" type="search" placeholder="Search here" aria-label="email"
                        required="">
                    <button class="btn btn-style search" type="submit">Search</button>
                </form>
                <a href="{{ url('/') }}" class="tn back-button mt-md-5 mt-4"> <span
                        class="fa fa-arrow-left mr-2"></span>
                    Back to Home</a>
            </div>
        </div>
    </div>
</div>
<!-- //404 error page -->

@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">

@endsection


