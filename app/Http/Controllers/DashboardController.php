<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        $data = Ticket::where('status_ticket','Menunggu')->count();
        $proses = Ticket::where('status_ticket','Direspon')->count();
        $success = Ticket::where('status_ticket','Selesai')->count();
        $user = User::count();
        
        return view("/dashboard", compact('data','user','proses','success'));
    }
}
