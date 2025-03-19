<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    public function valvulas() : HasMany 
    {
        return $this->hasMany(Valvula::class);
    }
}
