<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeUsers;
use App\Http\Controllers\adminController;
use App\Http\Livewire\Users;
use App\Http\Livewire\homeAdmin;

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
// Auth 
Route::get('/', [AuthController::class, 'index']);
Route::get('/signup', [AuthController::class, 'signup']);
Route::get('/forgotpassword', [AuthController::class, 'forgotpassword']);
Route::get('/resetpassword', [AuthController::class, 'resetpassword']);

// page User
Route::get('/home', [HomeUsers::class, 'home']);
Route::get('/createRequest', [HomeUsers::class, 'createReq']);
Route::get('/createWithoutAdmin', [HomeUsers::class, 'createWithoutAdmin']);

// ----------------------- ----------
// admin page 
// ----------------------
// Route::get('/loginAdmin', [AuthController::class, 'loginAdmin']);
// Route::get('/homeAdmin', [adminController::class, 'home']);
Route::get('/addAccount', [adminController::class, 'addAccount']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users', Users::class)->name('users');
    Route::post('users', Users::class)->name('users');
    Route::get('homeAdmin', homeAdmin::class)->name('homeAdmin');
});
