<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.index",compact("users"));
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        $user = $request->all();
        User::create($user);
        return redirect("/users");
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view("users.edit", compact("user"));
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->update($data);
        return redirect("/users");
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect("/users");
    }
}
