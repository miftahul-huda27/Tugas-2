<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

Route::get('/gettabel', [LatihanController::class, 'getTabel']);
Route::get('/getform', [LatihanController::class, 'getForm']);
