@extends('admin.layouts.master')
@section('title')
    @lang('translation.Products')
@endsection
@section('css')
    <link href="{{ URL::asset('admins/assets/libs/nouislider/nouislider.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admins/assets/css/product-page.css') }}">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Ecommerce
        @endslot
        @slot('title')
            Categories
        @endslot
    @endcomponent
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a><br>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-container" style="display: flex; flex-wrap: wrap;">
        @foreach($categories as $category)
            <div class="card" style="width: 11rem; margin: 8px; height:12rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name_en}}</h5>
                    <p class="card-text"></p>
                </div>

                <div class="card-footer d-flex justify-content-between">






                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary mr-2">Edit</a>


                    {{-- <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form> --}}
                </div>
            </div>
        @endforeach
    </div>

    {{$categories->links()}}

@endsection

@section('script')
    <script src="{{ URL::asset('admins/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('admins/assets/libs/wnumb/wnumb.min.js') }}"></script>
    <script src="{{ URL::asset('admins/assets/js/pages/product-filter-range.init.js') }}"></script>
    <script src="{{ URL::asset('/admins/assets/js/app.min.js') }}"></script>
@endsection
