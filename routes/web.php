<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('{student}/pdf/generate', [App\Http\Controllers\InvoicesController::class, 'generatePdf'])->name('student.invoice.generate');
