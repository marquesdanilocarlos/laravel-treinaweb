<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Site\SiteController;
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

Route::get("/", [SiteController::class, "index"])->name("home");
Route::get("/sobre", [SiteController::class, "about"]);
Route::get("/contato", [SiteController::class, "contact"]);
Route::get("/servicos", [SiteController::class, "services"]);
Route::get("/servico/{id}/{name?}", [SiteController::class, "service"]);

/*Route::get("/clientes", [ClientController::class, 'index'])->name("clients.index");
Route::get("/clientes/create", [ClientController::class, 'create'])->name("clients.create");
Route::get("/clientes/{id}", [ClientController::class, 'show'])->name("clients.show");
Route::get("/clientes/{id}/edit", [ClientController::class, 'edit'])->name("clients.edit");
Route::put("/clientes/{id}", [ClientController::class, 'update'])->name("clients.update");
Route::post("/clientes", [ClientController::class, "store"])->name("clients.store");
Route::delete("/clientes/{id}", [ClientController::class, "destroy"])->name("clients.destroy");*/

Route::resource('/clients', ClientController::class);
Route::resource('/services', ServiceController::class);


Route::get("/funcionarios", EmployeeController::class);
