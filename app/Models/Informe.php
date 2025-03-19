<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Informe extends Model
{
    public function valvula(): BelongsTo 
    {
        return $this->belongsTo(Valvula::class);
    }
}
