<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    /**
     * Table name
     */
    protected $table = 'cadfun';

    /**
     * Primary key name
     */
    protected $primaryKey = 'cod';
    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_criacao';
}
