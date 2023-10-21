<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::all();
        return view("app.clients.index", compact('clients'));
    }

    public function show(int $id): View
    {
        $client = Client::findOrFail($id);
        return view("app.clients.show", compact('client'));
    }

    public function create(): View
    {
        return view("app.clients.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        Client::create($data);

        return redirect(
            route('clients.index')
        );
    }

    public function edit(int $id): View
    {
        $client = Client::findOrFail($id);
        return view("app.clients.edit", compact('client'));
    }

    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::findOrFail($id);
        $data = $request->all();

        $client->update($data);

        return redirect(
            route('clients.index')
        );
    }

    public function destroy(int $id): RedirectResponse
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect(
            route('clients.index')
        );
    }

    public function relations()
    {
        /**
         * Leitura
         */
        $client = $client = Client::findOrFail(2);
        dump($client->projects()->get());

        /**
         * Inserção
         */

    }
}
