<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'rand',
        'nb1',
        'nb2',
        'nb3','nb4',
        'nb5',
    ];
}
