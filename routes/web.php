<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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

Route::get('/index', function () {
    return view('index');
});

Route::get('/view-job', function () {
    return view('view-job');
});

Route::get('/add-job', function () {
    return view('add-job');
});

Route::get('add-job', [JobController::class,'show']); 
Route::post('add-part', [JobController::class, 'store']);

