<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\BedroomController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\RoomController;
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

Auth::routes();
Route::resource('hospitals', HospitalController::class);
Route::resource('records', RecordController::class);
Route::resource('rooms', RoomController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('services', ServiceController::class);
Route::resource('quotes', QuoteController::class);
Route::resource('visits', VisitController::class);
Route::resource('tools', ToolController::class);
Route::resource('bedrooms',BedroomController::class);
Route::resource('beds',BedController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');