<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//Laravel 8 way 
Route::get('/home', [PagesController::class, 'index'])->name('index');

Route::get('/addTeacher', [PagesController::class, 'addTeacher']);

Route::get('/detailTeacher', [PagesController::class, 'detailTeacher']);

Route::get('/updateTeacher', [PagesController::class, 'updateTeacher']);


//Laravel 8 alternative way
//Route::get('/home', 'App\Http\Controllers\HomeController@index');


