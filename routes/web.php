<?php

use App\Http\Controllers\User\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function (){
    Route::get('user/register',[UserController::class,'index'])->name('user.register');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/all',[UserController::class,'all'])->name('user.all');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::get('user/view/{id}',[UserController::class,'view'])->name('user.view');
    Route::get('user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::post('user/update/{id}',[UserController::class,'update'])->name('user.update');
});
