<?php

use App\Http\Controllers\LoginController;
use App\Models\Employees;
use Illuminate\Support\Facades\Route;

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
    return view('login', [
        'title' => 'Login'
    ]);
});


Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('beranda', [
        'title' => 'Beranda',
        'name' => 'Ronny Hidayat',
        'employees' => Employees::all()
    ]);
});
