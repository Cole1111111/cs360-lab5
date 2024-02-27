<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;

Route::get('/', [AboutController::class,'show']);
Route::get('/about', [AboutController::class,'show']);
Route::get('/signup', [AboutController::class,'signup']);

Route::get('/photos', function () {
    return view('photos');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/terms', function () {
    return view('terms');
});


/*
Route::get('/sign_up', function () {
    return view('sign_up');
});

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/terms', function () {
    return view('terms');
});

*/