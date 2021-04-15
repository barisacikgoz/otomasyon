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
                                    <h3 class="card-title">Create User</h3>
                                </div>
                                <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <select class="form-control" placeholder="User Role" name="user_role" required>
                                                <option value="">Choose Role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
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
                                                        <thead>
                                                        <tr>
                                                            <th>User Id</th>
                                                            <th>User Role</th>
                                                            <th>User Name</th>
                                                            <th>User Email</th>
                                                            <th>Transactions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($users as $user)
                                                            <tr>
                                                                <td>{{ $user->id }}</td>
                                                                <td>{{ $user->user_role }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>
                                                                    <a href="{{ route("user.edit", $user->id) }}" type="button" class="btn btn-sm btn-primary float-left mr-1" data-toggle="modal" data-target="#brand_edit_{{ $user->id }}"><i class="fa fa-edit"></i></a>
                                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                    @foreach($users as $user)
                                                        <div id="brand_edit_{{ $user->id }}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <form action="{{ route('user.update', $user->id) }}" method="post">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            {{ $user->name }} brand is being updated.
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label>User Name</label>
                                                                            <input type="text" class="form-control mb-3" placeholder="User Name" name="name" value="{{--{{ $user->name }}--}}" required>

                                                                            <label>User Email</label>
                                                                            <input type="text" class="form-control mb-3" placeholder="User Email" name="email" value="{{--{{ $user->email }}--}}" required>

                                                                            <label>User Password</label>
                                                                            <input type="text" class="form-control mb-3" placeholder="User password" name="password" required>

                                                                            <label>User Role</label>
                                                                            <input type="text" class="form-control mb-3" placeholder="User Role" name="user_role" value="{{--{{ $user->password }}--}}" required>
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
