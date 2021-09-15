<?php

use App\Http\Controllers\CrudController;
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
    return view('welcome');
});

Route::get('/crud', [CrudController::class, 'index']);

Route::get('/crud/create', [CrudController::class, 'create']);

Route::post('/crud', [CrudController::class, 'store']);

Route::get('/crud/{id}/edit', [CrudController::class, 'edit']);

Route::put('/crud/{id}', [CrudController::class, 'update']);

Route::delete('/crud/{id}', [CrudController::class, 'delete']);
