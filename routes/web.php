<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('index', HomeController::class)->name('index');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/loginUser', [AuthController::class, 'loginUser']);

//test_route
Route::get('set', function(){return view('Ready-set-up');});
Route::get('dashboard', function(){return view('dashboard');});
