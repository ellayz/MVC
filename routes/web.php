<?php

use App\Http\Controllers\MainPageController;
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
Route::get('/',[MainPageController::class, 'SendData'])->name('toindex');
Route::get('1',[MainPageController::class, 'SendData1'])->name('toindex');
Route::post('getstarted', [MainPageController::class, 'SendData2']);
