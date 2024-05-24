<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    use HasFactory;
}
