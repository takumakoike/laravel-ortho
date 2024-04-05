<?php

use App\Http\Controllers\FeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/fees', function () {
//     return view('fees.index');
// });
Route::get("/fees", [FeesController::class, "index"])->name("index");