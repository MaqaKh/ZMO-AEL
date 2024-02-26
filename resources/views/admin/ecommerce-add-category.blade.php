@extends('admin.layouts.master')
@section('title') Add Category @endsection
@section('css')
<link href="{{ URL::asset('admins/assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admins/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('admin.components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Add Category @endslot
@endcomponent
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
                <p class="card-title-desc">Fill all information below</p>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Category Name En</label>
                                <input id="productname"   name="name_en" type="text" class="form-control"  placeholder="Product Name">
                            </div>
                            @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <div class="mb-3">
                                <label for="productname">Category Name Ru</label>
                                <input id="productname"   name="name_ru" type="text" class="form-control"  placeholder="Product Name">
                            </div>
                            @error('name_ru')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                            <div class="mb-3">
                                <label for="manufacturerbrand">Category Description En</label>
                                <input id="manufacturerbrand" name="description_en" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>
                            @error('description_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <div class="mb-3">
                                <label for="manufacturerbrand">Category Description Ru</label>
                                <input id="manufacturerbrand" name="description_ru" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>
                            @error('description_ru')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <label class="control-label">Visibility</label>

                            <select name="is_active" class="select2 form-control select2" data-placeholder="Choose ...">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                            @error('is_active')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="col-sm-6">

                    </div>



            </div>
        </div>

        {{-- <div class="card">
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

        </div> <!-- end card--> --}}
        <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
            <a type="reset" class="btn btn-secondary waves-effect waves-light" href={{ route("admin.categories.index") }}>Cancel</a>
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
