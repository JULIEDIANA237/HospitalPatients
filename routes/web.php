<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
/*Route::get('/patients/{patient}', 'PatientController@show')->name('patients.show');*/

Route::get('/', function () {
    return view('welcome');
});

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
