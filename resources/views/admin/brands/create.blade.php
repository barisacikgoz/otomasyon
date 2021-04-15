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
                                <form action="{{ route('brand.store') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Brand Name" name="title" required>
                                        </div>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary btn-block">Create</button>
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
                                                        <thead class="bg-dark text-warning">
                                                        <tr>
                                                            <th>Brand Id</th>
                                                            <th>Brand Name</th>
                                                            <th>Brand Created_at</th>
                                                            <th>Brand Updated_at</th>
                                                            <th>Transactions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($brand as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->title }}</td>
                                                                <td>{{ $item->created_at }}</td>
                                                                <td>{{ $item->updated_at }}</td>
                                                                <td>
                                                                    <a href="{{ route("brand.edit", $item->id) }}" type="button" class="btn btn-sm btn-primary float-left mr-1" data-toggle="modal" data-target="#brand_edit_{{ $item->id }}"><i class="fa fa-edit"></i></a>
                                                                    <form action="{{ route('brand.destroy', $item->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                    @foreach($brand as $item)
                                                        <div id="brand_edit_{{ $item->id }}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <form action="{{ route('brand.update', $item->id) }}" method="post">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            {{ $item->title }} brand is being updated.
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label>Brand Name</label>
                                                                            <input type="text" class="form-control" placeholder="Brand Name"
                                                                                   name="title"
                                                                                   value="{{ $item->title }}" required>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            <button class="btn btn-primary" type="submit">Update</button>
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
    </div>
    </div>
@endsection
