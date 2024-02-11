<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlato extends Model
{
    use HasFactory;
    //Un tipo plato, tiene muchos platos, asi que creamos un metodo
    //para que laravel haga su magia con todo esos platos
    // En sql seria Select * From platos p
        //join tipo_platos tp
        //where p.id = tp.plato_id;
    public function platos(){
        //Tiene que retornar los platos q tiene
        return $this->hasMany(Plato::class);
    }
}
