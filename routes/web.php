<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('particls.first');
// });



Route::get('/', [UserController::class, 'showUserWithAddresses']);
Route::get('/send-login-mail', [UserController::class, 'sendLoginMail']);

