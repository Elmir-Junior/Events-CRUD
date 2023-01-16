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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/edit/{id?}', [EventController::class, 'show', $id=null]);
Route::get('/events/delete/{id?}', [EventController::class, 'delete', $id=null]);

Route::post('/events/create/post', [EventController::class, 'store']);

Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/produtos/update/{id?}', [ProductController::class, 'update', $id=null]);
Route::get('/produtos/create/', [ProductController::class, 'create']);
Route::get('/produtos/delete/{id?}', [ProductController::class, 'delete', $id=null]);

Route::get('/contacts', function () {
    return view('contacts');
});
