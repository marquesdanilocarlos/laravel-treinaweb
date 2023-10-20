<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view("site.index");
    }

    public function about()
    {
        return view("site.about");
    }

    public function contact()
    {
        return view("site.contact");
    }

    public function services()
    {
        return view("site.services");
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

        return view("site.service", compact('services', 'id', 'name'));
    }
}
