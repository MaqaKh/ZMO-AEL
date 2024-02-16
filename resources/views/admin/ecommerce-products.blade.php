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
            Products
        @endslot
    @endcomponent
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a><br>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-container" style="display: flex; flex-wrap: wrap;">
        @foreach($products as $product)
            <div class="card" style="width: 11rem; margin: 8px; height:22rem;">
                <img src="{{$product->image_path}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="#" class="btn btn-primary mr-2">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    {{$products->links()}}

@endsection

@section('script')
    <script src="{{ URL::asset('admins/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('admins/assets/libs/wnumb/wnumb.min.js') }}"></script>
    <script src="{{ URL::asset('admins/assets/js/pages/product-filter-range.init.js') }}"></script>
    <script src="{{ URL::asset('/admins/assets/js/app.min.js') }}"></script>
@endsection
