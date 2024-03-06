@extends('admin.layouts.master')
@section('title') Edit Category @endsection
@section('css')
<link href="{{ URL::asset('admins/assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admins/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('admin.components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Edit Category @endslot
@endcomponent
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
                <p class="card-title-desc">Update all information below</p>
            </div>
            <div class="card-body">


                <form action="{{ route('categories.update', $category->id) }}"   method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Category Name EN</label>
                                <input id="productname"  value={{$category->name_en}} name="name_en" type="text" class="form-control"  placeholder="Product Name">
                            </div>
                            <div class="mb-3">
                                <label for="productname">Category Name RU</label>
                                <input id="productname"  value=   {{ $category->name_ru }} name="name_ru" type="text" class="form-control"  placeholder="Product Name">
                            </div>
                            <div class="mb-3">
                                <label for="name_ge">Category Name Ge</label>
                                <input id="name_ge"  value={{ $category->name_ge }} name="name_ge" type="text" class="form-control"  placeholder="Product Name">
                            </div>

                            <div class="mb-3">
                                <label for="manufacturerbrand">Category Description EN</label>
                                <input id="manufacturerbrand" value={{$category->description_en}} name="description_en" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>

                            <div class="mb-3">
                                <label for="manufacturerbrand">Category Description RU</label>
                                <input id="manufacturerbrand" value={{  $category->description_ru }} name="description_ru" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>
                            
                            <div class="mb-3">
                                <label for="description_ge">Category Description GE</label>
                                <input id="description_ge" value={{  $category->description_ge }} name="description_ge" type="text" class="form-control" placeholder="Manufacturer Brand">
                            </div>

                            <label class="control-label">Visibility</label>

                            <select name="is_active" class="select2 form-control select2" data-placeholder="Choose ...">
                                <option value="1" {{ old('is_active', $category->is_active) == '1' ? 'selected' : '' }}>ON</option>
                                <option value="0" {{ old('is_active', $category->is_active) == '0' ? 'selected' : '' }}>OFF</option>
                            </select>


                        </div>


                    </div>



            </div>
        </div>

      <!-- end card-->
        <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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
