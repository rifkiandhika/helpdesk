<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function index(){
        $data["users"] = User::all();

        return view("/user/index", $data);
    }
    

    //edit user
    public function edit($id){
        $data = user::find($id);
        return view("/user/edit", compact('data'));
    }

    //delete user
    public function destroy($id){
        $data = user::find($id);
        $data->delete();
        return redirect('/users')->with('Status',"Data Berhasil Dihapus");
    }

    //detail user
    public function detail($id){
        user::find($id);
        $data = user::find($id);
        return view("user.detail", compact('data')); 

    }

    public function update(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('users');
    }

    public function details($id){
        $data["users"] = User::all();
        $data = User::find($id);
        return view('Ticket.detail', compact('data'));

    }

    // public function store(Request $request)
    // {
    //     $data=$request->validate([
    //         'nama' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'status' => 'required',
    //         'divisi' => 'required',
    //     ]);
    //     ($data);
    //     user::updated([
    //         'nama'=> $request->keluhan,
    //         'email'=> $request->email,
    //         'password'=> $request->password,
    //         'status'=> $request->status,
    //         'divisi'=> $request->divisi,
    //         'updated_at'=> now()
    //     ]);
    //     return back()->with('status', "Data Berhasil di Update");
    // }
    
}
