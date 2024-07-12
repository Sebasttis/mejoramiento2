<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    use HasFactory;

    public function Destinos (){
        return $this->hasMany('App\Models\Destino');
    }

    public function Origens (){
        return $this->hasMany('App\Models\Origen');
    }
    public function Viajero (){
        return $this->belongsTo('App\Models\Viajero');
    }

}
