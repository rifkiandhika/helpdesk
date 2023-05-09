<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ResponCController extends Controller
{
    public function index(){
        $data ["tickets"] = Ticket::where('status_ticket','Menunggu')->get();
        return view("MenuClient/ResponC", $data, compact('data'));
    }
}
