<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::resource('competitions', CompetitionController::class);
Route::resource('participants', ParticipantController::class);
