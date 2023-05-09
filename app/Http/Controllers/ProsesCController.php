<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
class ProsesCController extends Controller
{
    public function index(){
        $data ["tickets"] = Ticket::where('status_ticket','Direspon')->get();
        return view("MenuClient/ProsesC", $data, compact('data'));
    }
}
