<?php

use App\Http\Controllers\Dashboard\CandidateController;
use App\Http\Controllers\Dashboard\NationalCommitteeController;
use App\Http\Controllers\Dashboard\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('candidates', CandidateController::class);
Route::resource('nationalcommittees', NationalCommitteeController::class);
Route::resource('news', NewsController::class);
