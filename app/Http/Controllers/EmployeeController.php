<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Employee;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function eloquent()
    {
        $employees = Employee::all();

        //$names = $employees->pluck('name');
        //$employees = $employees->all();
        //$employees = $employees->toArray();
        //$employees = $employees->toJson();
        //$employees = $employees->pop();
        dump($employees);

        $numeros = [3, 1, 7, 5, 4, 9];
        $numeros = collect($numeros)->sort();
        dump($numeros);

        try {
            //$employee = Employee::findOrFail(3);
            $employee = Employee::first();

            dump($employee);
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    public function insert()
    {
        /*---------Inclusão-----------*/

        try {
            $employee = new Employee();
            $employee->name = "Juvenal";
            $employee->cpf = "12312312312";
            $employee->hiring_date = '2023-10-21';

            $employee->saveOrFail();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update()
    {
        $employee = Employee::find(3);
        $employee->name = "Calabreso";
        $employee->cpf = 23546121654;

        dump($employee->save());
    }

    public function mass()
    {
        //Inclusão
        $data = [
            '_token' => 'aj55kdhf54asiu85',
            'name' => 'Carmissa',
            'cpf' => 12345678932,
            'hiring_date' => '2023-09-25'
        ];

        dump(Employee::create($data));

        //Update
        dump(
            Employee::where('hiring_date', '2023-10-21')->update(['resignation_date' => '2023-11-01'])
        );

        //Delete
        Employee::destroy([5,6]);
    }

    public function delete()
    {
        $employee = Employee::find(3);
        dump($employee->delete());
    }

    public function queryBuilder()
    {
        $employees = DB::table('employees')
            ->select('name', 'cpf')
            ->where('name', 'Danilo')
            ->get();

        $employees = DB::table('employees')
            ->select('name', 'cpf')
            ->where('cpf', 'LIKE', '%4%')
            ->orderBy('cpf', 'desc')
            ->get();

        $employees = Employee::where('name', 'LIKE', '%a%')->orderBy('id', 'DESC')->get();
        dump($employees);
    }

    public function hasOne()
    {
        $employee = Employee::find(1);
        dump($employee->address()->first());
    }

    public function relationInsert()
    {
        $employee = Employee::findOrFail(4);

        /*$address = new Address();
        $address->address = "Rua teste";
        $address->number = 10;
        $address->neighborhood = "Setor Sul";
        $address->city = "Cidade monstra";
        $address->zipcode = 75123645;
        $address->state = "DF";

        dd($employee->address()->save($address));*/

        $addressData = [
            'address' => 'Rua Marota',
            'number' => 33,
            'neighborhood' => 'Bairo do nada',
            'city' => 'Anápolis',
            'zipcode' => 72546313,
            'state' => 'TO'
        ];

        dd($employee->address()->create($addressData));
    }
}
