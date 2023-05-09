<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ProssesController extends Controller
{
    public function index(){
        $data ["tickets"] = Ticket::where('status_ticket','Direspon')->get();
        return view("Menu/Proses", $data, compact('data'));
    }
}
