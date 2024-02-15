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
    <a href="{{ route('products.create') }}" class="btn btn-primary"  >Create Product</a>


    <div class="card-container" style="display: flex; flex-wrap: wrap;">
        @foreach($products as $product)
        <div class="card" style="width: 18rem; margin: 10px;">
            <img src="{{$product->image_path}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->description}}</p>
            </div>

            <div class="card-body">
              <a href="#" class="card-link">Edit</a>

              <a href="#" class="card-link">Delete</a>
            </div>
          </div>
        @endforeach
    </div>



@endsection
@section('script')
    <script src="{{ URL::asset('admins/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('admins/assets/libs/wnumb/wnumb.min.js') }}"></script>
    <script src="{{ URL::asset('admins/assets/js/pages/product-filter-range.init.js') }}"></script>
    <script src="{{ URL::asset('/admins/assets/js/app.min.js') }}"></script>
@endsection
