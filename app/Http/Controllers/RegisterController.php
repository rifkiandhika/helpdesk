<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view("/Register/index");
    }


    public function register_data(Request $request){
        $validatedData=$request->validate([
            'nama'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'divisi'=>'required'
        ]);
        $validatedData['password']= Hash::make($validatedData['password']);
        User::create ($validatedData);

        return redirect('/users');

        
    }
}
