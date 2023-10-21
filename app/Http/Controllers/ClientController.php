<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
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
        $client = Client::findOrFail(1);
        //dump($client->projects()->get());

        /**
         * Inserção
         */
        /*$firstProject = new Project();
        $firstProject->name = 'Primeiro projeto';
        $firstProject->budget = 13000;
        $firstProject->start_date = '2023-07-01';
        $firstProject->final_date = '2023-09-01';

        $secondProject = new Project();
        $secondProject->name = 'Segundo projeto';
        $secondProject->budget = 17500;
        $secondProject->start_date = '2023-03-01';
        $secondProject->final_date = '2023-05-01';



        dump($client->projects()->saveMany([$firstProject,$secondProject]));

        $client = Client::findOrFail(1);

        $projectsData = [
            [
                'name' => 'Terceiro projeto',
                'budget' => 23640,
                'start_date' => '2020-08-13',
                'final_date' => '2021-08-13',
            ],
            [
                'name' => 'Quarto projeto',
                'budget' => 36532,
                'start_date' => '2020-01-25',
                'final_date' => '2021-02-28',
            ],
        ];

        dump($client->projects()->createMany($projectsData));*/

        dump($client->projects()->where('budget', 23640)->get());
    }
}
