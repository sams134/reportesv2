<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cliente';

    public function infoCliente()
    {
        return $this->hasOne('App\Models\InfoCliente','id_cliente');
    }

    public function motores()
    {
        return $this->hasMany('App\Models\Motor','id_cliente');
    }
    public function motores_desc()
    {
        return $this->hasMany('App\Models\Motor','id_cliente')->orderBy('year','desc')->orderBy('os','desc');
    }
}
