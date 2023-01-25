<?php

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');

Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/events/create/post', [EventController::class, 'store']);
Route::delete('/events/delete/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('/contacts', function () {
    return view('contacts');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [EventController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');
});
