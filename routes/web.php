<?php

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
Route::get('/summary', function () {
    return view('health_worker.summary');
});
Route::get('/calendar', function () {
    return view('health_worker.calendar');
});
Route::get('/indicators', function () {
    return view('health_worker.indicators');
});
Route::get('/finances', function () {
    return view('health_worker.finances');
});
Route::get('/my-profile', function () {
    return view('health_worker.my-profile');
});
Route::get('/appointments', function () {
    return view('health_worker.appointments');
});
Route::get('/public-profile', function () {
    return view('health_worker.public-profile');
});
Route::get('/patients', function () {
    return view('health_worker.patients');
});
Route::get('/clinic-history', function () {
    return view('health_worker.clinic-history');
});

