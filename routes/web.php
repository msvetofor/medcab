<?php

use Illuminate\Support\Facades\Route;

Route::get('/logout', [App\Http\Controllers\AuthorizationController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('/', [App\Http\Controllers\AuthorizationController::class, 'authorization'])->middleware('guest')->name('authorization');
Route::post('/', [App\Http\Controllers\AuthorizationController::class, 'store'])->middleware('guest');

Route::get('/reg', [App\Http\Controllers\RegistrationController::class, 'registration'])->middleware('guest')->name('registration');
Route::post('/reg', [App\Http\Controllers\RegistrationController::class, 'store'])->middleware('guest');

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'main'])->middleware('auth')->name('profile');
Route::get('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'getSettings'])->middleware('auth')->name('settings');
Route::post('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'updateSettings'])->middleware('auth');

Route::get('/appointmspecialist', [App\Http\Controllers\AppointmentSpecializationController::class, 'appointmspecialist'])->name('appointmspecialist');
Route::get('/appointmentdoctor/{userSpecialization}', [ App\Http\Controllers\AppointmentDoctorController::class, 'appointmentdoctor'])->name('appointmentdoctor');
Route::get('/consultations', [\App\Http\Controllers\ConsultationController::class, 'consultations'])->name('consultations');
Route::get('/doctor/{DoctorId}', [ App\Http\Controllers\DoctorController::class, 'doctor'])->name('doctor');

Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'certificates'])->middleware('auth')->name('certificates');
Route::get('/injections', [\App\Http\Controllers\InjectionController::class, 'injections'])->middleware('auth')->name('injections');
Route::get('/records', [\App\Http\Controllers\RecordController::class, 'records'])->middleware('auth')->name('records');
Route::get('/diseases', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('diseases');
Route::get('/consultation', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('consultation');
Route::get('/recommendations', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('recommendations');

