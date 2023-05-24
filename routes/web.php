<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClintController;
use App\Http\Livewire\Mijoz;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ClintController::class,'index'])->name('index');
Route::get('/mijoz',[ClintController::class,'mijoz'])->name('mijoz');
Route::get('/active/{tel}',[ClintController::class,'active'])->name('active');
Route::get('/winners',[ClintController::class,'winners'])->name('winners');
Route::post('/mijozadd',[ClintController::class,'mijozadd'])->name('mijozadd');
Route::post('/delete/{id}',[ClintController::class,'delete'])->name('delete');
// Route::get('/mijoz',[Mijoz::class])->name('mijoz');
