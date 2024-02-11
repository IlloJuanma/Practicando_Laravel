<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
// Librebria que nos permite usar consultar sql utiles para borrar
use DB;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Estos son mis platos";

        // Sin bbdd
        // $platos =[
        //     ["Tortilla de patatas",4.95,"Ración"],
        //     ["Chuletillas de cordero",9.95,"Ración"],
        //     ["Ensaladilla rusa",3.5,"Tapa"]
        // ];

        // Para coger los datos desde la bbdd
        $platos = Plato::all();
       

        return view('platos/index', ['mens' => $mensaje, 'platos' => $platos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Éste método solo nos sirve para mostrar el formulario
        return view('platos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui es donde creamos el objeto
        // Aqui es donde pondriamos la comprobaciones de la creación
        $plato = new Plato;
        // Coger el valor de cada campo con el metodo post tipico
        $plato -> nombre = $request -> input('nombre');
        $plato -> precio = $request -> input('precio');
        $plato -> tipo = $request -> input('tipo');
        // Para guardar el objeto (lo que es un insert tipico)
        $plato -> save();

        // Esto es para que nos direccione a una url (no a una vista cuidao)
        return redirect('platos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plato = Plato::find($id);
        return view('platos/show', ['plato' => $plato]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plato = Plato::find($id);
        return view ('platos/edit', ['plato'=> $plato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plato = Plato::find($id);

        $plato -> nombre = $request -> input('nombre');
        $plato -> precio = $request -> input('precio');
        $plato -> tipo = $request -> input('tipo');
        $plato->save();

        return redirect('platos');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Asi invocamos a la tabla platos
        DB::table('platos')->where('id',"=",$id)->delete();
        // Aqui podriamos poner mayor igual, menor igual...

        return redirect('/platos');
    }
}
