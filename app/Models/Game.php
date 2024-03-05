<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'rand',
    
    ];
    public function plays(){
        return $this->HasMany(Play::class);
    }
}
