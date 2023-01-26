<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class copro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'nbBloc',
        'nbEtage',
        'nbAppart',
    ];
}
