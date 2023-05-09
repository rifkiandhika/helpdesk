<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailCController extends Controller
{
    public function index(){
        return view("/MenuClient/DetailC");
    }
}
