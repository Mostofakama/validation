<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', [UserController::class,'userdata'])->name('home');

Route::get('/user/{id}',[UserController::class,'singleuser'])->name('single.user');


Route::get('/insert',[UserController::class,'insert'])->name('insert');

Route::post('/insertdata',[UserController::class,'insertdata'])->name('insert.data');


Route::get('/update/{id}',[UserController::class,'update'])->name('update.user');

Route::post('/updatedata/{id}',[UserController::class,'updatedata'])->name('update.data');

Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');