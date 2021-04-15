<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;



Route::get('/', [DataController::class, 'index'])->name('welcomePage');

Route::get('/add_new_user', [DataController::class, 'addNewUser']);
Route::post('/add_new_user_submitted', [DataController::class, 'addNewUserSubmitted']);

Route::get('/view_user/{id}', [DataController::class, 'view']);

Route::get('/edit_user/{id}', [DataController::class, 'edit']);
Route::post('/edit_user_submitted/{id}', [DataController::class, 'editSubmitted']);

Route::get('/delete_user/{id}', [DataController::class, 'delete']);
