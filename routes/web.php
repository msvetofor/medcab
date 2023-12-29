<?php

use Illuminate\Support\Facades\Route;

Route::get('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'getSettings'])->middleware('auth')->name('settings');
Route::post('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'updateSettings'])->middleware('auth');

Route::get('/appointmspecialist', [App\Http\Controllers\AppointmentSpecializationController::class, 'appointmspecialist'])->name('appointmspecialist');
Route::get('/appointmentdoctor/{userSpecialization}', [ App\Http\Controllers\AppointmentDoctorController::class, 'appointmentdoctor'])->name('appointmentdoctor');
Route::get('/consultations', [\App\Http\Controllers\ConsultationController::class, 'consultations'])->name('consultations');
Route::get('/doctor/{DoctorId}', [ App\Http\Controllers\DoctorController::class, 'doctor'])->name('doctor');

Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'certificates'])->middleware('auth')->name('certificates');
Route::get('/certificates/create', [\App\Http\Controllers\CertificateController::class, 'get_form'])->middleware('auth')->name('create_certificate');
Route::post('/certificates/create', [\App\Http\Controllers\CertificateController::class, 'create'])->middleware('auth');
Route::get('/certificates/update/{id}', [\App\Http\Controllers\CertificateController::class, 'get_update_form'])->middleware('auth')->name('update_certificate');
Route::post('/certificates/update/{id}', [\App\Http\Controllers\CertificateController::class, 'update'])->middleware('auth');
Route::get('/certificates/delete/{id}', [\App\Http\Controllers\CertificateController::class, 'delete'])->middleware('auth')->name('delete_certificate');
Route::get('/certificates/undelete/{id}', [\App\Http\Controllers\CertificateController::class, 'undelete'])->middleware('auth')->name('undelete_certificate');

Route::get('/injections', [\App\Http\Controllers\InjectionController::class, 'injections'])->middleware('auth')->name('injections');
Route::get('/injections/create', [\App\Http\Controllers\InjectionController::class, 'get_form'])->middleware('auth')->name('create_injection');
Route::post('/injections/create', [\App\Http\Controllers\InjectionController::class, 'create'])->middleware('auth');

Route::get('/records', [\App\Http\Controllers\RecordController::class, 'records'])->middleware('auth')->name('records');
Route::get('/records/create', [\App\Http\Controllers\RecordController::class, 'get_form'])->middleware('auth')->name('create_record');
Route::post('/records/create', [\App\Http\Controllers\RecordController::class, 'create'])->middleware('auth');

Route::get('/diseases', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('diseases');
Route::get('/diseases/create', [\App\Http\Controllers\DiseaseController::class, 'get_form'])->middleware('auth')->name('create_disease');
Route::post('/diseases/create', [\App\Http\Controllers\DiseaseController::class, 'create'])->middleware('auth');

Route::get('/recommendations', [\App\Http\Controllers\DiseaseController::class, 'diseases'])->middleware('auth')->name('recommendations');

//Главная
Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('main');
//Запись
Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'appointment'])->middleware('auth')->name('appointment');
Route::post('/appointment/create', [App\Http\Controllers\AppointmentController::class, 'create'])->middleware('auth')->name('appointment_create');
//Авторизация
Route::get('/authorization', [App\Http\Controllers\AuthorizationController::class, 'authorization'])->middleware('guest')->name('authorization');
Route::post('/authorization', [App\Http\Controllers\AuthorizationController::class, 'store'])->middleware('guest');
//Регистрация
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'registration'])->middleware('guest')->name('registration');
Route::post('/registration', [App\Http\Controllers\RegistrationController::class, 'store'])->middleware('guest');
//Личный кабинет
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'main'])->middleware('auth')->name('profile');
//Выход из личного кабинета
Route::get('/logout', [App\Http\Controllers\AuthorizationController::class, 'destroy'])->middleware('auth')->name('logout');
Route::post('/', [App\Http\Controllers\AuthorizationController::class, 'store'])->middleware('guest');
//Консультация
Route::get('/consultations', [\App\Http\Controllers\ConsultationController::class, 'consultations'])->name('consultations');
//Консультация  ЧАТ
Route::get('consultations/chat/{appointmentId}', [\App\Http\Controllers\ChatController::class, 'chat'])->name('chat');
Route::post('consultations/chat/update', [\App\Http\Controllers\ChatController::class, 'chat_update'])->name('chat_update');
//Консультация ВРАЧ
Route::get('/appointmentlist', [\App\Http\Controllers\ConsultationController::class, 'appointmentlist'])->name('appointmentlist');
//чат ГПТ
Route::get('/consultant', [App\Http\Controllers\ConsultantController::class, 'consultant'])->name('consultant');
//ЧеТо
Route::get('/profile/notifications', [\App\Http\Controllers\ProfileController::class, 'getNotifications'])->middleware('auth')->name('notifications');
Route::get('/profile/recomendations', [\App\Http\Controllers\ProfileController::class, 'getRecomendations'])->middleware('auth')->name('recomendations');
