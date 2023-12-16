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
Route::get('/app', [App\Http\Controllers\AppointmentSpecializationController::class, 'appointmentspecialization'])->name('appointmentspecialization');
Route::get('/appointmentdoctor/{userSpecialization}', [ App\Http\Controllers\AppointmentDoctorController::class, 'appointmentdoctor'])->name('appointmentdoctor');

Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'certificates'])->middleware('auth')->name('certificates');
Route::get('/certificates/create', [\App\Http\Controllers\CertificateController::class, 'get_form'])->middleware('auth')->name('create_certificate');
Route::post('/certificates/create', [\App\Http\Controllers\CertificateController::class, 'create'])->middleware('auth');

Route::get('/injections', [\App\Http\Controllers\InjectionController::class, 'injections'])->middleware('auth')->name('injections');
Route::get('/injections/create', [\App\Http\Controllers\InjectionController::class, 'get_form'])->middleware('auth')->name('create_injection');
Route::post('/injections/create', [\App\Http\Controllers\InjectionController::class, 'create'])->middleware('auth');

Route::get('/records', [\App\Http\Controllers\RecordController::class, 'records'])->middleware('auth')->name('records');
Route::get('/records/create', [\App\Http\Controllers\RecordController::class, 'get_form'])->middleware('auth')->name('create_record');
Route::post('/records/create', [\App\Http\Controllers\RecordController::class, 'create'])->middleware('auth');

Route::get('/diseases', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('diseases');
Route::get('/consultation', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('consultation');
Route::get('/recommendations', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('recommendations');
