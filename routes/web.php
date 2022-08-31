<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;





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
    return view('home');
});

Route::get('nav',[IndexController::class,'nav'])->name('include.nav');
Route::get('home',[IndexController::class,'home'])->name('home');
Route::get('footer',[IndexController::class,'footer'])->name('include.footer');
//hospital
Route::get('hospitals',[HospitalController::class,'index'])->name('hospitals.index');
Route::get('hospitals/create', [HospitalController::class, 'create'])->name('hospitals.create');
Route::post('hospitals/store', [HospitalController::class, 'store'])->name('hospitals.store');
Route::get('hospitals/{id}/edit', [HospitalController::class, 'edit'])->name('hospitals.edit');
Route::post('hospitals/{id}/update', [HospitalController::class, 'update'])->name('hospitals.update');
Route::get('hospitals/{id}/delete', [HospitalController::class, 'delete'])->name('hospitals.delete');
//doctor
Route::get('doctors',[DoctorController::class,'index'])->name('doctors.index');
Route::get('doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('doctors/store', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
Route::post('doctors/{id}/update', [DoctorController::class, 'update'])->name('doctors.update');
Route::get('doctors/{id}/delete', [DoctorController::class, 'delete'])->name('doctors.delete');
//patient
Route::get('patients' , [PatientController::class , 'index'])->name('patients.index');
Route::get('patients/create' , [PatientController::class , 'create'])->name('patients.create');
Route::post('patients/store' , [PatientController::class , 'store'])->name('patients.store');
