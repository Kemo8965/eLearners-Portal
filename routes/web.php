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



Route::get('/grades', function () {
    return view('grades.grades');
});

Route::get('/grades2', function () {
    return view('grades.grades2');
});


Route::get('/grade10', function () {
    return view('grades.grade10.g10-dashboard');
});

Route::get('/g10-dashboard', function () {
    return view('grades.grade10.g10-welcome');
});

Route::get('/grade11', function () {
    return view('grades.g11-dashboard');
});

Route::get('/grade12', function () {
    return view('grades.g12-dashboard');
});

Route::get('/outcomes1', function () {
    return view('grades.grade10.subjects.mathematics.topics.index notation.indices.lessons.outcomes1');
});

Route::get('/outcomes2', function () {
    return view('grades.grade10.subjects.mathematics.topics.index notation.indices.lessons.outcomes2');
});

Route::get('/outcomes3', function () {
    return view('grades.grade10.subjects.mathematics.topics.index notation.indices.lessons.outcomes3');
});

Route::get('/outcomes4', function () {
    return view('grades.grade10.subjects.mathematics.topics.index notation.indices.lessons.outcomes4');
});


//------------------ALGEBRA----------------------//

Route::get('/algebraOutcomes1', function () {
    return view('grades.grade10.subjects.mathematics.topics.algebra.lessons.outcomes1');
});

Route::get('/algebraOutcomes2', function () {
    return view('grades.grade10.subjects.mathematics.topics.algebra.lessons.outcomes2');
});

Route::get('/algebraOutcomes3', function () {
    return view('grades.grade10.subjects.mathematics.topics.algebra.lessons.outcomes3');
});


//-----------------------MATRICES------------------------------------
Route::get('/matrixOutcomes1', function () {
    return view('grades.grade10.subjects.mathematics.topics.matrices.lessons.outcomes1');
});




