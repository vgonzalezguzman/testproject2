<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curs extends Model
{
    use HasFactory;

    protected $table = 'curs';

    protected $fillable = [
        'Nom',
        'Etapa',
        'Descripcio',
        'Actiu',
    ];
}
