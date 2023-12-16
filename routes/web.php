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

Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'certificates'])->middleware('auth')->name('certificates');
Route::get('/injections', [\App\Http\Controllers\InjectionController::class, 'injections'])->middleware('auth')->name('injections');
Route::get('/medical_book', [\App\Http\Controllers\RecordController::class, 'records'])->middleware('auth')->name('medical_book');
Route::get('/diseases', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('diseases');
Route::get('/consultation', [\App\Http\Controllers\ProfileController::class, 'consultation'])->middleware('auth')->name('consultation');
Route::get('/recomendations', [\App\Http\Controllers\ProfileController::class, 'recomendations'])->middleware('auth')->name('recomendations');
