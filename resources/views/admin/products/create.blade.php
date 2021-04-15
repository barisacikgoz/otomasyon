@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card col-lg-8">
                        <div class="card-body">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Create Product</h3>
                                </div>
                                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <label>Product Name</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Product Name" name="name" required>
                                        </div>

                                        <label>Product Stock Code</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Stock Code" name="stock_code" required>
                                        </div>

                                        <label>Product Stock</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Stock" name="stock" required>
                                        </div>

                                        <label>Product Brand</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" name="brand_id" required>
                                                <option value="" selected disabled hidden>Choose Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <label>Product İmage</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="image" accept="image/*" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="images[]" multiple accept="image/*">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                            </div>
                                        </div>

                                        <label>Product Price</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Price" name="price" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary btn-block">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
