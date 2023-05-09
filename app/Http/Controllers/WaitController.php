<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class WaitController extends Controller
{
    public function index(){
        $data ["tickets"] = Ticket::where('status_ticket','Menunggu')->get();
        return view("/Menu/Respon", $data ,compact('data') );
    }
}
