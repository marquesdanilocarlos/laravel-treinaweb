<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view("app.clients.index", compact('clients'));
    }

    public function show(int $id)
    {
        $client = Client::find($id);
        return view("app.clients.show", compact('client'));
    }

    public function create()
    {
        return view("app.clients.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Client::create($data);

        return redirect(
            route('clients.index')
        );
    }
}
