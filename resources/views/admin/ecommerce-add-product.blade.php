@extends('admin.layouts.master')
@section('title') @lang('translation.Add_Product') @endsection
@section('css')
<link href="{{ URL::asset('admins/assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admins/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('admin.components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Add Product @endslot
@endcomponent
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
                <p class="card-title-desc">Fill all information below</p>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Product Name</label>
                                <input id="productname"   name="name" type="text" class="form-control"  placeholder="Product Name">
                            </div>

                            <div class="mb-3">
                                <label for="manufacturerbrand">Price</label>
                                <input id="manufacturerbrand" name="price" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>
                            <div class="mb-3">
                                <label for="price">Code</label>
                                <input id="price" name="code" type="text" class="form-control" placeholder="Price">
                            </div>

                            <div class="mb-3">
                                <label for="price">Stock status</label>
                                <input id="price" name="stock_status" type="text" class="form-control" placeholder="Price">
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">Category</label>
                                <select name="category_id" class="form-control select2">
                                    <option>Select</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="control-label">Visibility</label>

                                <select name="is_active" class="select2 form-control select2" data-placeholder="Choose ...">
                                    <option value="1">ON</option>
                                    <option value="0">OFF</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="productdesc">Product Description EN</label>
                                <textarea class="form-control" name="description_en" id="productdesc" rows="5" placeholder="Product Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="productdesc">Product Description RU</label>
                                <textarea class="form-control" name="description_en" id="productdesc" rows="5" placeholder="Product Description"></textarea>
                            </div>

                        </div>
                    </div>



            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Product Images</h4>
            </div>
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

            </div>

        </div> <!-- end card-->
        <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
            <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
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
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('admins/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('admins/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('admins/assets/js/pages/ecommerce-select2.init.js') }}"></script>
<script src="{{ URL::asset('/admins/assets/js/app.min.js') }}"></script>
@endsection
