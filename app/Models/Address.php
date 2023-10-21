<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'number', 'neighborhood', 'complement', 'city', 'state', 'zipcode'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
