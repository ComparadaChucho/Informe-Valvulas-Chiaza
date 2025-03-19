<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Valvula extends Model
{
    public function empresa() : BelongsTo 
    {
        return $this->belongsTo(Empresa::class);
    }

    public function informes() : HasMany 
    {
        return $this->hasMany(Informe::class);
    }
}
