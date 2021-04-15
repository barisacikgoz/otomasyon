@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card-body">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">DataTable</h3>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="GET">
                                                    <input type="text" class="form-control col-1 float-left mr-1" name="search_all" placeholder="Search" value="{{ request()->get('search_all') }}">
                                                    <select class="form-control col-1 float-left" onchange="this.form.submit()" name="brand_search">
                                                        <option value="">Choose Brand</option>
                                                        @foreach($brands as $brand)
                                                            <option @if(request()->get('brand_search' === $brand->id)) selected @endif value="{{ $brand->id }}">{{ $brand->title }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if(auth()->user()->user_role == 1)
                                                    <a href="{{ route('product.create') }}" class="btn btn-success float-right"><i class="fa fa-plus">&nbsp</i>Create Product</a>
                                                    @endif

                                                    @if(request()->get('brand_search') || request()->get('search_all'))
                                                        <div class="col-md-2 float-left">
                                                            <a href="{{ route('product.index') }}" class="btn btn-secondary">Reset</a>
                                                        </div>
                                                    @endif
                                                </form>
                                            </div>
                                            <div class="card-body">
                                                <table id="brand_list" class="display table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                        <th>Product Stock Code</th>
                                                        <th>Product Brand</th>
                                                        <th>Product Stock</th>
                                                        <th>Product Price</th>
                                                        <th>Transactions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($products as $product)
                                                        <tr>
                                                            <td>
                                                                <a href="" data-toggle="modal" data-target="#product_basket_{{ $product->id }}">
                                                                    <img src="{{ url($product->image) }}" width="150px" height="100px">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{ $product->name }}
                                                            </td>
                                                            <td>{{ $product->stock_code }}</td>
                                                            <td>{{ $product->brand->title }}</td>
                                                            <td>
                                                                {{ $product->stock }}
                                                                @if($product->stock < 50)
                                                                    <i class="fa fa-exclamation-triangle text-warning"></i>
                                                                @endif
                                                            </td>
                                                            <td>{{ $product->price }} TL</td>
                                                            <td>
                                                                <a href="{{ route("product.edit", $product->id) }}" type="button" class="btn btn-sm btn-primary float-left mr-1" title="Edit"><i class="fa fa-edit"></i></a>

                                                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-times"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                                @foreach($products as $product)
                                                    <div id="product_basket_{{ $product->id }}" class="modal fade bd-example-modal-lg" role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <form action="{{ route('basket.store') }}" method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4>{{ $product->stock_code }}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <img src="{{ url($product->image) }}" style="width: 400px; float: left">
                                                                            <div class="float-right text-center" style="width:300px; height: 200px; padding-top: 90px; margin-left: 50px;">
                                                                                <h2>{{ $product->stock_code }}</h2>
                                                                                <h3><b>{{ $product->name }}</b></h3>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row mt-3">
                                                                            <div class="col-6">
                                                                                <label>Amount:</label>
                                                                                <input type="number" min="1" class="form-control amount" data-price="{{ $product->price }}" name="amount" required>
                                                                                <input type="hidden" class="form-control" value="{{ $product->price }}" name="price">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <label>Stock Note:</label>
                                                                                <input type="text" class="form-control" name="stock_note" required>
                                                                                <input type="hidden" class="form-control" value="{{ $product->stock_code }}" name="stock_code">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mt-3 float-right">
                                                                        <div class="float-right mr-3">
                                                                            <label>Total Price: <h3 style="color: darkred;" class="float-right total_price"> {{ $product->price }} TL</h3></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                        <button class="btn btn-primary" type="submit">Add To Basket</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
