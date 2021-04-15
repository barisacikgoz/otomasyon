<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $users = User::all();

        return view('admin.user.list', compact('users'));
    }

    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->post('name');
        $users->email = $request->post('email');
        $users->password = \Hash::make($request->post('password'));
        $users->user_role = $request->post('user_role');
        $users->save();

        toastr()->success('User Create Successful');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.brands.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = $request->except("_method", "_token", "password");
        $users['password'] = \Hash::make($request->post('password'));
        User::where("id", $id)->update($users);

        return redirect()->route('user.create');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        User::where("id", $id)->delete();

        toastr()->success('User Delete Successful');
        return redirect()->back();
    }
}
