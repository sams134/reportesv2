<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoMotor extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function motor()
    {
        return $this->belongsTo('App\Models\Motor','id_motor');
    }
}
