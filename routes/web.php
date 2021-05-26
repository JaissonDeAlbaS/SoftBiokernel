<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\AdminDoctorController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DpacienteController;
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
    return view('principal');
});

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/admin_doctores', function () {
//     return view('admin_doctores');
// });

// Route::get('/admin_pacientes', function () {
//     return view('admin_pacientes');
// });

// Route::get('/doctor', function () {
//     return view('doctor');
// });

Route::resource('admin', HospitalController::class);
Route::resource('admin_doctores', AdminDoctorController::class);
Route::resource('admin_pacientes', PacienteController::class);
Route::resource('doctor', DpacienteController::class);
