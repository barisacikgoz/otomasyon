@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card col-lg-4 mr-5">
                        <div class="card-body">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Create Brand</h3>
                                </div>
                                <form action="{{ route('brand.update', $data->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Brand Name" name="title" value="{{ $data->title }}" required>
                                        </div>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-7 float-right">
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
                                                    <table id="brand_list" class="display table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Product Id</th>
                                                            <th>Product Name</th>
                                                            <th>Product Created_at<th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($brand as $item)--}}
{{--                                                            <tr>--}}
{{--                                                                <td>{{ $item->id }}</td>--}}
{{--                                                                <td>{{ $item->title }}</td>--}}
{{--                                                                <td>{{ $item->created_at }}</td>--}}
{{--                                                                <td>--}}
{{--                                                                    --}}{{--                                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#brand_edit"><i class="fa fa-edit"></i></button>--}}
{{--                                                                    <form action="{{ route('brand.edit', $item->id) }}">--}}
{{--                                                                        @csrf--}}
{{--                                                                        <a href="{{ route('brand.edit', $item->id) }}" class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a>--}}
{{--                                                                    </form>--}}
{{--                                                                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                        @endforeach--}}
                                                        </tbody>
                                                    </table>

                                                    <div id="brand_edit" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <div class="modal-content">
                                                                <div class="modal-header">
{{--                                                                    {{ $item->title }} brand is being updated.--}}
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label>Brand Name</label>
                                                                    <input type="text" class="form-control" placeholder="Brand Name" name="title" value="" required>
                                                                </div>
                                                                <div class="modal-footer">
{{--                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                                                                    <form action="{{ route('brand.edit', $item->id) }}">--}}
{{--                                                                        @csrf--}}
{{--                                                                        @method('PUT')--}}
{{--                                                                        <a href="{{ route('brand.update', $item->id) }}" class="btn btn-primary" data-dismiss="modal">Update</a>--}}
{{--                                                                    </form>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
    </div>
    </div>

@endsection
