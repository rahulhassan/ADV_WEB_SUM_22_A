<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\teamsController;

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
    return view('home');
})->name('homePage');

Route::get('/teams', [teamsController::class,'details'])->name('ourTeams');

//Route::get('/teams/{id}', function($id){return view('ourTeams');})->name('ourTeams');

Route::get('/contact', function(){return view('contactUs');})->name('contactUs');
Route::get('/about', function(){return view('aboutUs');})->name('aboutUs');

Route::get('/service', [serviceController::class,'service'])->name('servicePage');