<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $data["users"] = User::all();
        return view("/Menu/Karyawan", $data);
    }

    
}
