<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


        $employees = DB::table('employees')
            ->select('name', 'cpf')
            ->where('name', 'Danilo')
            ->get();

        $employees = DB::table('employees')
            ->select('name', 'cpf')
            ->where('cpf','LIKE', '%4%')
            ->orderBy('cpf', 'desc')
            ->get();

        dump($employees);
    }
}
