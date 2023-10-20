<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return "Conteúdo Home";
    }

    public function about()
    {
        return "Conteúdo Sobre";
    }

    public function contact()
    {
        return "Conteúdo Contato";
    }

    public function services()
    {
        return "Conteúdo Serviços";
    }

    public function service(int $id, string $name = null)
    {
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
    }
}
