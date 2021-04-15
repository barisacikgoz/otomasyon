<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use function React\Promise\all;

class OrderController extends Controller
{

    public function index()
    {

    }





    public function createOrder(Request $request)
    {
        $data['user_id'] = auth()->user()->id;
        $data['all_total_price'] = $request->post('all_total_price');

        $order = Order::create($data);

        $baskets = Basket::where('user_id', auth()->id())->get();

        foreach ($baskets as $basket) {
            $order_product['order_id'] = $order->id;
            $order_product['stock_code'] = $basket->stock_code;
            $order_product['amount'] = $basket->amount;
            $order_product['price'] = $basket->total_price;

            OrderProduct::create($order_product);
        }
        $delete = Basket::where('user_id', auth()->id());
        $delete->delete();

        $all_price = Order::where('user_id', auth()->user()->id)->sum('all_total_price');
        $data = Order::where('user_id', auth()->user()->id)->get();

        toastr()->success('Siparişinizde bir hata çıkması durumunda sizi bilgilendireceğiz.', 'Siparişiniz Başarıyla Oluşturuldu.');
        return view('admin.dashboard', compact(['data', 'all_price']));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
