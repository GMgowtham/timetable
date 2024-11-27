<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/register', [AuthController::class, 'showRegister']);
// Route::post('/register', [AuthController::class, 'store']);

Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::middleware(['web'])->group(function () {
    // Routes requiring session 
});

Route::get('/timetable', [TimetableController::class, 'show']);
Route::post('/manage-timetable', [TimetableController::class, 'manage']);
Route::post('/create-timetable', [TimetableController::class, 'create']);
Route::patch('/edit-timetable', [TimetableController::class, 'update']);
