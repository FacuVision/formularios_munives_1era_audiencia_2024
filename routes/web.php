<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeighborController;
use App\Http\Controllers\OrganizationController;

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

Route::get('/', [NeighborController::class,'welcome'])->name('welcome.neighbors');

Route::resource('neighbors', NeighborController::class)->names('neighbors');
Route::resource('organizations', OrganizationController::class)->names('organizations');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [NeighborController::class , 'dashboard'])->name('dashboard');
});
