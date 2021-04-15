<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Brand;
use App\Models\Product;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all();

        if (request()->get('search_all'))
        {
            $products = Product::where('stock_code', 'LIKE', "%".request()->get('search_all')."%")
                    ->orWhere('name', 'LIKE', "%".request()->get('search_all')."%")
                    ->orWhere('price', 'LIKE', "%".request()->get('search_all')."%");

            $products = $products->paginate(5);
        }

        if (request()->get('brand_search'))
        {
            $products = Product::where('brand_id', 'LIKE', "%".request()->get('brand_search')."%");

            $products = $products->paginate(5);
        }

        return view('admin.products.list', compact('products', 'brands'));
    }

    public function create()
    {
        $brands = Brand::all();

        return view('admin.products.create', compact('brands'));
    }

    public function store(ProductCreateRequest $request)
    {
        $data = $request->except("_token","image","images");
        if ($request->hasFile('image')) {
            $data["image"] = $request->file("image")->store("images");
        }
        $product = Product::create($data);


        if ($request->hasFile("images")) {
            foreach ($request->file("images") as $image) {
                $data = [
                    "product_id" => $product->id,
                    "image" => $image->store("images")
                ];

                ProductImage::create($data);
            }
        }

        return redirect()->route('product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $brands = Brand::all();

        return view('admin.products.edit', compact('data', 'brands'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token');

        Product::where("id", $id)->update($data);
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
