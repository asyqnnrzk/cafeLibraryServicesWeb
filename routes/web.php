<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\CUuserController;
use App\Http\Controllers\CUlibraryController;
use App\Http\Controllers\CUcafeController;
use App\Http\Controllers\CUitemController;
use App\Http\Controllers\CUannounceController;
use App\Http\Controllers\CUbeverageController;
use App\Http\Controllers\viewReportController;

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
Route::get('/home', [homePageController::class, 'home'])->name('homepage');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::get('/user', [CUuserController::class, 'create_update_user'])->name('user');
Route::get('/library', [CUlibraryController::class, 'create_update_library'])->name('library');
Route::get('/cafe', [CUcafeController::class, 'create_update_cafe'])->name('cafe');
Route::get('/item', [CUitemController::class, 'create_update_item'])->name('item');
Route::get('/announce', [CUannounceController::class, 'create_update_announce'])->name('announce');
Route::get('/beverage', [CUbeverageController::class, 'create_update_beverage'])->name('beverage');
Route::get('/report', [viewReportController::class, 'index'])->name('viewReport');