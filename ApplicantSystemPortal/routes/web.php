<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('applicants.index');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('applicants', ApplicantController::class);
});

require __DIR__.'/auth.php';
