@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Add a Product</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="/admin/productadd" method="POST" role="form text-left">
                @csrf
                {{-- @if($errors->any())
                    <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">
                        {{$errors->first()}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif --}}
                {{-- @if(session('success'))
                    <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text text-white">
                        {{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-name" class="form-control-label">Name</label>
                            <div class="@error('product.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Name" id="product-name" name="name">
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-min-range" class="form-control-label">Minimum Price</label>
                            <div class="@error('product.minimumprice')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="number" placeholder="Mininum Price" id="product-min-range" name="price_min_range">
                                    @error('minimumprice')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-max-range" class="form-control-label">Maximum Price</label>
                            <div class="@error('product.maximumprice')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="number" placeholder="Maximum Price" id="product-max-range" name="price_max_range">
                                    @error('maximumprice')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-image" class="form-control-label">Upload Image</label>
                            <div class="@error('product.image')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="file" placeholder="Upload Image" id="product-image" name="main_product_image">
                                    @error('image')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-tags" class="form-control-label">Tags</label>
                            <div class="@error('product.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="Upload Image" id="product-tags" name="tags">
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-inclusions" class="form-control-label">Inclusions</label>
                            <div class="@error('product.image')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="Inclusions" id="product-inclusions" name="inclusions">
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="product-description">Description</label>
                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                            <textarea class="form-control" id="product-description" rows="3" placeholder="Product Description...." name="description"></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Add Product' }}</button>
                </div>
            </form>
  
        </div>
    </div>
  </div>

  @endsection