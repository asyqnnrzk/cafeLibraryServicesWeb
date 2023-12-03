<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewReportController;
use App\Http\Controllers\homePageController;

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
Route::get('/report', [viewReportController::class, 'index'])->name('viewReport');
Route::get('/home', [homePageController::class, 'home'])->name('homepage');