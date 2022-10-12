<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Forntend Routes
Route::get('/', [App\Http\Controllers\SurveyController::class, 'welcome'])->name('welcome');
Route::post('add-survey', [App\Http\Controllers\SurveyController::class, 'addSurvey'])->name('addSurvey');
Route::get('see-member/{id}', [App\Http\Controllers\HomeController::class, 'seeMember'])->name('seeMember');
