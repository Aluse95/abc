<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::prefix('users')->name('users.')->group(function() {
    
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/add', [UserController::class, 'getAdd'])->name('add');

    Route::post('/add', [UserController::class, 'postAdd']);

    Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');

    Route::post('/edit/{id}', [UserController::class, 'updateStudent']);

    Route::get('/delete/{id}', [UserController::class, 'deleteStudent'])->name('delete');

});