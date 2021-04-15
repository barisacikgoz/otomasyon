<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Break_;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $data["brand"] = Brand::all();

        return view('admin.brands.create', $data);
    }

    public function store(Request $request)
    {
        $isExist = Brand::whereSlug(Str::slug($request->post('title')))->first();
        if ($isExist) {
            toastr()->error('This Category Already Been Exist.');
            return redirect()->back();
        }


        $brands = new Brand();
        $brands->title = $request->post('title');
        $brands->slug = Str::slug($request->post('title'));
        $brands->save();

        toastr()->success('Category Create Successful.');
        return redirect()->back();
    }

    public function show(Request $request)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $data = Brand::find($id);

        return view('admin.brands.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->except("_method", "_token");
        Brand::where("id", $id)->update($data);

        return redirect()->route('brand.create');
    }

    public function destroy(Request $request, $id)
    {
        $data = Brand::find($id);
        Brand::where("id", $id)->delete();

        return redirect()->back();
    }
}
