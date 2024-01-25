<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fralda extends Model
{
    use HasFactory;

    protected $fillable = [
        'operador',
        'turno',
        'peso',
        'status'
    ];

}
