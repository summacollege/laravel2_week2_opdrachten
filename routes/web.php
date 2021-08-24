<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::resource('jobs', JobController::class);
Route::group(['middleware'=>['auth:sanctum', 'verified']], function () {
    Route::resource('jobs', JobController::class);
});