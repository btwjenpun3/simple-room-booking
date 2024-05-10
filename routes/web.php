<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');

Route::get('/rooms', [RoomController::class, 'index'])->name('room.index')->middleware('auth');

Route::get('/booking/{type}', [BookingController::class, 'index'])->name('booking.index')->middleware('auth');
