<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;
    //El plato pertenece a un tipo de plato
    public function tipo_plato(){
        return $this->belongsTo(TipoPlato::class);
    }

    public function menus(){
        return $this->belongsToMany(Menu::class);
    }
}
