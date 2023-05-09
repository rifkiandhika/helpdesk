<?php

namespace App\Http\Controllers;
Use App\Models\Ticket;
use Illuminate\Http\Request;

class SuksesController extends Controller
{
    public function index(){
        $data ["tickets"] = Ticket::where('status_ticket','Selesai')->get();
        return view("/Menu/Sukses", $data, compact('data'));
    }
}
