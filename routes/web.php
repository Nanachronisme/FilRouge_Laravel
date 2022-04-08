<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [TeacherController::class, 'index'])->name('index');

Route::resource('/teachers', TeacherController::class);

//Laravel 8 way 
// Route::get('/home', [TeacherController::class, '@index'])->name('index');

// Route::get('/addTeacher', [TeacherController::class, 'create']);

// Route::get('/detailTeacher', [TeacherController::class, 'TeacherController@show']);

// Route::get('/updateTeacher', [TeacherController::class, 'updateTeacher']);


//Laravel 8 alternative way
//Route::get('/home', 'App\Http\Controllers\HomeController@index');


