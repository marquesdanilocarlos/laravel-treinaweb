<?php

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

Route::get('/', function () {
    return "Conteúdo Home";
});

Route::get('/servicos', function () {
    return "Conteúdo Serviços";
});

Route::get('/servico/{id}/{name?}', function (int $id, string $name = null) {
    $services = [
        1 => [
            "name" => "Lavagem",
            "description" => "descrição do serviço"
        ],
        2 => [
            "name" => "Polimento",
            "description" => "descrição do serviço"
        ],
        3 => [
            "name" => "Secagem",
            "description" => "descrição do serviço"
        ],
        "danilo" => [
            "name" => "Default",
            "description" => "descrição do serviço"
        ]
    ];

    echo $services[$id]["name"] ?? $services[$name]["name"];
});

Route::get('/contato', function () {
    return "Conteúdo Contato";
});

Route::get('/sobre', function () {
    return "Conteúdo Sobre";
});
