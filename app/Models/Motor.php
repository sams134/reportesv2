<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_motor';

    protected $guarded = [];
    
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
    public function infoMotor()
    {
        return $this->hasOne('App\Motores\InfoMotor','id_motor');
    }
    public function inventario()
    {
        return $this->hasOne('App\Models\Inventario','id_motor');
    }
}
