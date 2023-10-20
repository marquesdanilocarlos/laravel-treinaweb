<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function __invoke(Request $request)
    {
        $name = $request->name;
        return "Olá, {$name}!";
    }
}
