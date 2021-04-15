@extends('admin.layouts.master')

@section('content')
    @if($order_btn < 1)
        Copy
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        @if($order_btn < 1)
                                            <div class="card-header text-center">
                                                <h3 class="card-title">SEPETİNİZ BOŞ!</h3>
                                            </div>
                                        @else
                                            <div class="card-header">
                                                <h3 class="card-title">Basket</h3>
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            @if($order_btn < 1)
                                                <h2 class="text-center">Sepetinizde Henüz Ürün Bulunmamaktadır.</h2>
                                            @endif
                                            @if($order_btn > 0)
                                                <table id="brand_list" class="display table-bordered">
                                                    <thead class="bg-dark">
                                                    <tr>
                                                        <th>Product Stock Code</th>
                                                        <th>Stock Note</th>
                                                        <th>Amount</th>
                                                        <th>Total Price</th>
                                                        <th>Transaction</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $item)
                                                        @if($item->user_id == auth()->user()->id)
                                                            <tr>
                                                                <td>{{ $item->stock_code }}</td>
                                                                <td>{{ $item->stock_note }}</td>
                                                                <td>{{ $item->amount }}</td>
                                                                <td>{{ $item->total_price }}</td>
                                                                <td>
                                                                    <form action="{{ route('basket.destroy', $item->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            <form action="{{ route('create.order') }}" method="post">
                                                @csrf
                                                <div class="float-right">
                                                    <h4 class="float-left">All Total: </h4>
                                                    <h4 class="float-left">&nbsp; {{ $all_price['all_total_price'] }}</h4><br>
                                                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-secondary mr-2">Continue Shopping</a>
                                                        <button type="submit" class="btn btn-sm btn-success float-right">Order</button>
                                                    @endif
                                                    <input type="hidden" value="{{ $all_price['all_total_price'] }}" name="all_total_price">
                                                </div>
                                            </form>
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
