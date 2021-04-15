<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BaskettController extends Controller
{

    public function index()
    {
        $data = Basket::all();

        $all_price['all_total_price'] = Basket::where('user_id', auth()->id())->sum('total_price');

        $order_btn = Basket::where('user_id', auth()->id())->count();
        return view('admin.basket.index', compact('data', 'all_price', 'order_btn'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
       $data = $request->except('_token');
       $data['user_id'] = auth()->id();
       $data['total_price'] = $request->post('amount') * $request->post('price');
       $basket = Basket::create($data);

       toastr()->success('Ürünleriniz Başarıyla Sepetinize Eklendi.');
       return redirect()->route('basket.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $basket_product_delete = Basket::find($id);
        $basket_product_delete->delete();

        toastr()->success('Ürün Silme İşlemi Başarılı.');
        return redirect()->back();
    }
}
