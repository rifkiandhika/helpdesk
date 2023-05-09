<?php

use App\Http\Controllers\CLController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanCContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProsesCController;
use App\Http\Controllers\ProssesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResponCController;
use App\Http\Controllers\SuksesCController;
use App\Http\Controllers\SuksesController;
use App\Http\Controllers\WaitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, "index"])->name("login");
 //register view
Route::get('/Register',[RegisterController::class,"index"])->name("Register");
Route::post('/register_data',[RegisterController::class, "register_data"]);



//route login-logout
Route::post('/login/auth', [LoginController::class, "auth"]);
Route::get('/logout', [LoginController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function(){
    // dashboard view
    Route::get('/dashboard', [DashboardController::class, "index"]);
    
    // users view
    Route::get('/users', [UserController::class, "index"])->name("users");
    Route::get('/user/edit/{id}',[UserController::class, "edit"]);
    Route::get('destroy/{id}', [UserController::class, "destroy"]);
    Route::get('/user/detail/{id}',[UserController::class, "detail"]);
    Route::post('/user/update/{id}', [UserController::class, "update"]);
   
    // Route::post('/user/edit/store', [UserController::class, "store"]);

    // ticket view
    Route::get('/Ticket', [TicketController::class, "index"]);
    Route::get('/tambah_ticket', [TicketController::class, "create"]);
    Route::post('/insert_data', [TicketController::class, "insert_data"]);
    Route::get('/tickets/edit/{id}',[TicketController::class, "edit"]);
    Route::get('/tickets/detail/{id}',[TicketController::class, "detail"]);
    Route::get('/tickets/status/{id}/{status}',[TicketController::class, "status"]);
    Route::get('delete/{id}', [TicketController::class, "delete"]);
    
    // reportticket view
    Route::get('/Report', [ReportController::class, "index"]);
    Route::get('/Print/{tglawal}/{tglakhir}', [ReportController::class, "Print"]);
    
    // menu view
    Route::get('/Karyawan', [KaryawanController::class, "index"]);
    Route::get('Menu/clientlogin', [CLController::class, "index"]);
    Route::get('/client', [CLController::class, "client"]);
    Route::get('/Proses', [ProssesController::class, "index"]);
    Route::get('/Sukses', [SuksesController::class, "index"]);
    Route::get('/Respon', [WaitController::class, "index"]);

    //Menu Client 
    Route::get('/KaryawanC', [KaryawanCContoller::class, "index"]);
    Route::get('/ProsesC', [ProsesCController::class, "index"]);
    Route::get('/SuksesC', [SuksesCController::class, "index"]);
    Route::get('/ResponC', [ResponCController::class, "index"]);

    

   
});

// Route::get("/login", [LoginController::class, "index"]);