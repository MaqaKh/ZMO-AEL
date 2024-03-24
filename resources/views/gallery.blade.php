@extends('master')


@section('content')

    <div class="container mb-5" style="margin-top:10%;">
        <div class="row mt-5 mb-5">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/1.png') }}" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/2.png') }}" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/7.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="row mt-5 mb-5">
            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/4.png') }}" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/5.png') }}" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/6.png') }}" class="img-fluid rounded">
            </a>
        </div>

        <div class="row mt-5 mb-5">
            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/8.png') }}" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/9.png') }}" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery"
               class="col-md-4">
                <img src="{{ asset('images/gallery/11.png') }}" class="img-fluid rounded">
            </a>
        </div>
    </div>


@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

@endsection

