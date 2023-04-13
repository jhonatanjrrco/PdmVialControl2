<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('boleta/pdf',[ReportController::class,'pdfBoleta'])->name('boleta.pdf');
Route::get('/', function () { return view('welcome');});

Route::middleware(['auth:sanctum',    config('jetstream.auth_session'),    'verified'])->group(function () {Route::get('/dashboard', function () {return view('dashboard');    })->name('dashboard');});
