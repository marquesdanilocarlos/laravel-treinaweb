<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'index']);
Route::get('/servicos', [SiteController::class, 'services']);
Route::get('/servico/{id}/{name?}', [SiteController::class, 'service']);
Route::get('/contato', [SiteController::class, 'contact']);
Route::get('/sobre', [SiteController::class, 'about']);
Route::get('/saudacao/{name}', GreetingController::class);
