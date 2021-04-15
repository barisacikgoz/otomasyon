@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Admin Confirmation</h3>
                                        </div>
                                        <div class="card-body">
                                            <table id="brand_list" class="display table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>User Id</th>
                                                    <th>Created At</th>
                                                    <th>Total Price</th>
                                                    <th>Confirmation</th>
                                                    <th>Transaction</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td>{{ $item->user_id }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td>${{ $item->all_total_price }}</td>
                                                        <td>
                                                            @switch($item->status)
                                                                @case('approved')
                                                                <span class="badge badge-success">Kabul Edildi</span>
                                                                @break;

                                                                @case('pending')
                                                                <span class="badge badge-warning">Onay Bekliyor</span>
                                                                @break;

                                                                @case('denied')
                                                                <span class="badge badge-danger">Reddedildi</span>
                                                                @break;
                                                            @endswitch
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-success ml-2 mt-1" data-toggle="modal" data-target="#order_confirm_{{ $item->id }}">Change Status</a>
                                                            <a class="btn btn-sm btn-secondary ml-1 mt-1" data-toggle="modal" data-target="#order_detail_{{ $item->id }}"><i class="fa fa-info-circle"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                            @foreach($data as $item)
                                                <form action="{{ route('status_update', $item->id) }}" method="post">
                                                    @csrf
                                                    <div id="order_confirm_{{ $item->id }}" class="modal fade bd-example-modal-lg" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    Are You Sure?
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <select class="form-control col-12 float-left" name="status">
                                                                        @foreach(order_status() as $key => $status)
                                                                            <option value="{{ $key }}" @if($item->status == $key) selected @endif>{{ $status }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button class="btn btn-primary" type="submit">Save Status</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach

                                            @foreach($data as $item)
                                                <form action="{{ route('status_update', $item->id) }}" method="post">
                                                    @csrf
                                                    <div id="order_detail_{{ $item->id }}" class="modal fade bd-example-modal-lg" role="dialog">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-secondary">
                                                                    <h2><i>Order Detail.</i></h2>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <table class="table table-hover">
                                                                        <thead class="thead-dark">
                                                                        <tr>
                                                                            <th scope="col">Order ID</th>
                                                                            <th scope="col">Stock Code</th>
                                                                            <th scope="col">Amount</th>
                                                                            <th scope="col">Price</th>
                                                                            <th scope="col">Created At</th>

                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($item->orderProducts as $order_product)
                                                                            <tr>
                                                                                <th scope="row">{{ $order_product->order_id }}</th>
                                                                                <td>{{ $order_product->stock_code }}</td>
                                                                                <td>{{ $order_product->amount }}</td>
                                                                                <td>{{ $order_product->price }}</td>
                                                                                <td>{{ $order_product->created_at }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
