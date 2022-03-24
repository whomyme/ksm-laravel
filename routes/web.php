<?php

use App\Http\Controllers\StaffController;
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


Route::resource('staffs', StaffController::class);

Route::get('/blade', function () {
    return view('child');
});

Route::get('/blade1', function () {
    return view('child1');
});
