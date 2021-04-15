<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\BasketConfirm;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketConfirmController extends Controller
{

    public function index()
    {
        $data = Order::all();

        return view('admin.confirm.index', compact('data'));
    }

    public function confirm_id(Request $request, $id){
        $data = Order::find($id);

        DB::table('basket_confirms')->where('id', $data->id)->update(['status' => $request->post('status')]);

        return redirect()->back();
    }

    public function Confirmation(){
        $orders = Order::where('user_id', auth()->id())->get();

        foreach ($orders as $order){
            $confirm['user_id'] = $order->user_id;
            $confirm['all_total_price'] = $order->all_total_price;

            BasketConfirm::create($confirm);
        }

        return redirect()->route('confirm.index');
    }


    public function status_update(Request $request, $id){
        $data = Order::find($id)->update([
            'status' => $request->post('status'),
        ]);

        toastr()->success('Change of status has been successfully completed.');
        return redirect()->back();
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

    }
}
