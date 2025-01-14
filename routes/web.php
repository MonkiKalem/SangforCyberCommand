<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');

Route::get('/', function () {
    return view('home');
});

Route::get('/thank-you', function () {
    return view('thankyou'); 
})->name('thankyou.page');

