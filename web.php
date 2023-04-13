<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProssesController;
use App\Http\Controllers\RegisterController;
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
Route::get('/Register',[RegisterController::class,"index"])->name("Register");
Route::post('/login/auth', [LoginController::class, "auth"]);
Route::get('/logout', [LoginController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function(){
    // dashboard view
    Route::get('/dashboard', [DashboardController::class, "index"]);
    
    // users view
    Route::get('/users', [UserController::class, "index"]);

    // ticket view
    Route::get('/Ticket', [TicketController::class, "index"]);
    Route::get('/tambah_ticket', [TicketController::class, "create"]);
    Route::post('/insert_data', [TicketController::class, "insert_data"]);
    
    // reportticket view
    Route::get('/Report', [ReportController::class, "index"]);
    
    // menu view
    Route::get('/Karyawan', [KaryawanController::class, "index"]);
    Route::get('/Proses', [ProssesController::class, "index"]);
    Route::get('/Sukses', [SuksesController::class, "index"]);
    Route::get('/Respon', [WaitController::class, "index"]);

});

// Route::get("/login", [LoginController::class, "index"]);