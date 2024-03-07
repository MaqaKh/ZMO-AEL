@extends('admin.layouts.master')

@section('title') Edit Product @endsection
@section('css')
<link href="{{ URL::asset('admins/assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admins/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('admin.components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Edit Product @endslot
@endcomponent
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
                <p class="card-title-desc">Update all information below</p>
            </div>
            <div class="card-body">

                <form action="{{ route('products.update', $products->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <input id="name"  value="{{$products->name}}" name="name" type="text" class="form-control"  placeholder="Product Name">
                            </div>

                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input id="price" value="{{$products->price}}" name="price" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>
                            <div class="mb-3">
                                <label for="price">Code</label>
                                <input id="price" name="code" value="{{$products->code}}" type="text" class="form-control" placeholder="Price">
                            </div>

                            {{-- <div class="mb-3">
                                <label for="price">Stock status</label>
                                <input id="price" name="stock_status" value="{{$products->stock_status}}" type="text" class="form-control" placeholder="Price">
                            </div> --}}
                            <label class="control-label">Stock status</label>

                            <select name="stock_status" class="select2 form-control select2" data-placeholder="Choose ...">
                                <option value="1" {{ old('stock_status', $products->stock_status) == '1' ? 'selected' : '' }}>Available</option>
                                <option value="0" {{ old('stock_status', $products->stock_status) == '0' ? 'selected' : '' }}>Not available</option>
                            </select>

                            <label for="price">Product Image</label>
                            <div class="card-body">

                                <div class="fallback">
                                    <input name="image" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>

                                @if($products->image_path)
                                    <img src="{{ $products->image_path }}" alt="Product Image" style="max-height: 200px; max-width: 200px;">
                                @endif

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">Category</label>
                                <select name="category_id" class="form-control select2">

                                    @foreach($categories as $category)
                                    {{-- <option value="{{ $category->id }}">{{ $category->name_en }}</option> --}}
                                    <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected' : '' }}>{{ $category->name_en }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="control-label">Visibility</label>

                                <select name="is_active" class="select2 form-control select2" data-placeholder="Choose ...">
                                    <option value="1" {{ old('is_active', $products->is_active) == '1' ? 'selected' : '' }}>ON</option>
                                    <option value="0" {{ old('is_active', $products->is_active) == '0' ? 'selected' : '' }}>OFF</option>
                                </select>

                            </div>

                            <div class="mb-3">
                                <label for="description_en">Product Description EN</label>
                                <textarea class="form-control" id="description_en"   name="description_en" id="productdesc" rows="5" placeholder="Product Description En">{{ old('description_en', $products->description_en) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description_ru">Product Description RU</label>
                                <textarea class="form-control"  id="description_ru"  name="description_ru"   rows="5" placeholder="Product Description Ru">{{ old('description_ru', $products->description_ru) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description_ge">Product Description GE</label>
                                <textarea class="form-control"  id="description_ge"  name="description_ge"   rows="5" placeholder="Product Description Ge">{{ old('description_ge', $products->description_ge) }}</textarea>
                            </div>


                            <div class="mb-3">
                                <label for="pdf">Pdf</label>
                                <input id="pdf" name="pdf" type="file" class="form-control" placeholder="PDf">
                            </div>

                            @if($products->pdf)
                            <embed src="{{$products->pdf }}" type="application/pdf" width="50%" height="400px">

                                <p class="mb-2 mt-4">
                                    <span class="fas fa-download" aria-hidden="true"></span>

                                    <a href="{{ asset($products->pdf) }}"    target="_blank">Open PDF</a>


                                </p>
                                @else
                            <p>No PDF available for this product</p>

                        @endif




                            <!-- end card-->
                        </div>
                    </div>



            </div>
        </div>



        <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
            <a type="reset" class="btn btn-secondary waves-effect waves-light" href={{ route("admin.products.index") }}>Cancel</a>
        </div>

    </form>
        {{-- <div class="card">
            <div class="card-header">
                <h4 class="card-title">Meta Data</h4>
                <p class="card-title-desc">Fill all information below</p>
            </div>
            <div class="card-body">

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="metatitle">Meta title</label>
                                <input id="metatitle" name="productname" type="text" class="form-control" placeholder="Metatitle">
                            </div>
                            <div class="mb-3">
                                <label for="metakeywords">Meta Keywords</label>
                                <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Meta Keywords">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="metadescription">Meta Description</label>
                                <textarea class="form-control" id="metadescription" rows="5" placeholder="Meta Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                        <button type="submit" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                    </div>
                </form>

            </div>
        </div> --}}
    </div>
</div>
<x-head.tinymce-config/>

<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('admins/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('admins/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('admins/assets/js/pages/ecommerce-select2.init.js') }}"></script>
<script src="{{ URL::asset('/admins/assets/js/app.min.js') }}"></script>
@endsection
