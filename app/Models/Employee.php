<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //Campos que podem ser inseridos
    protected $fillable = ['name', 'cpf', 'hiring_date', 'resignation_date'];

    //Campos que não devem ser inseridos
    protected $guarded = ['id','created_at', 'updated_at'];

}
