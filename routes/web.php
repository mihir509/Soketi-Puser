<?php

use App\Events\UserRegistation;
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
    return view('welcome');
});

Route::get('/UserRegister', function () {
   
    return view('UserRegister');
});

Route::post('/UserRegister', function () {

    $name = request()->name;

    event(new UserRegistation($name));
    
});