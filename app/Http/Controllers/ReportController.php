<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $data["tickets"] = Ticket::all();
        return view("Report/index", $data);
    }



    public function Print($tglawal, $tglakhir){
        //(["Tanggal Awal :".$tglawal, "Tanggal Akhir :".$tglakhir]);
        $cetak_data = Ticket::whereBetween('created_at', [$tglawal, $tglakhir])->get();//->get()
        return view("Report.cetak_data", compact('cetak_data'));
        
    }
}
