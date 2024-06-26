<?php
use App\Http\Controllers\ClintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginPage', [AuthController::class, 'loginPage'])->name('loginPage');

Route::middleware('auth')->group(function () {
    Route::post('/logaut', [AuthController::class, 'logaut'])->name('logaut');
    Route::get('/edit', [AuthController::class, 'edit'])->name('edit');
    Route::post('/editLogin', [AuthController::class, 'editLogin'])->name('editLogin');

    Route::get('/artisan', function () {

        Artisan::call('optimize');

        Artisan::call('config:clear');

        return redirect('/product');
    });

    Route::get('/', [ClintController::class, 'index'])->name('index');
    Route::get('/mijoz', [ClintController::class, 'mijoz'])->name('mijoz');
    Route::get('/active/{tel}', [ClintController::class, 'active'])->name('active');
    Route::get('/winners', [ClintController::class, 'winners'])->name('winners');
    Route::post('/mijozadd', [ClintController::class, 'mijozadd'])->name('mijozadd');
    Route::post('/delete/{id}', [ClintController::class, 'delete'])->name('delete');
});
