<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class SuksesCController extends Controller
{
    public function index(){
        $data ["tickets"] = Ticket::where('status_ticket','Selesai')->get();
        return view("MenuClient/SuksesC", $data, compact('data'));
    }
}
