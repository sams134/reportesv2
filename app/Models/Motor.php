<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
}
