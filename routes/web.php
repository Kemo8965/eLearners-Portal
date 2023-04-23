<?php

use App\Http\Controllers;
use App\Http\Controllers\RegistrationController;
use GuzzleHttp\Promise\Create;
use Illuminate\Session\Store;
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

// Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Route::post('loginUser', [LoginController::class, 'login']);


 Route::get('/register', function () {
     return view('register');
 });

Route::post('registerUser', [RegistrationController::class, 'store']);

// Route::get('/register', 'RegistrationController@create');
// Route::post('register', 'RegistrationController@store');



Route::get('/recoverpw', function () {
    return view('recoverpw');
});

Route::get('/dashboard', function () {
    return view('layouts.auth');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/grade10', function () {
    return view('grades.g10-dashboard');
});

Route::get('/grades', function () {
    return view('grades.grades');
});





