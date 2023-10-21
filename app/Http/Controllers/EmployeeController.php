<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $employees = Employee::all();

        //$names = $employees->pluck('name');
        //$employees = $employees->all();
        //$employees = $employees->toArray();
        //$employees = $employees->toJson();
        //$employees = $employees->pop();

        dump($employees);

        $numeros = [3,1,7,5,4,9];
        $numeros = collect($numeros)->sort();

        dump($numeros);

        //var_dump($employees);
    }
}
