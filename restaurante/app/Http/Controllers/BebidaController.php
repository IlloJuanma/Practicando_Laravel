<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $bebidas = [
        //     ["Cocacola", 1.25, "Lata"],
        //     ["Fanta", 1.25, "Lata"],
        //     ["Vino", 18, "Rioja Reserva"],
        //     ["Agua", 0.0, "Es gratis, da igual"],
        // ];

        $bebidas = Bebida::all();

        return view('bebidas/index', ['bebidas' => $bebidas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bebidas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Aqui es donde creamos el objeto
        // Aqui es donde pondriamos la comprobaciones de la creación
        $bebida = new Bebida;
        // Coger el valor de cada campo con el metodo post tipico
        $bebida -> nombre = $request -> input('nombre');
        $bebida -> precio = $request -> input('precio');
        $bebida -> tipo = $request -> input('tipo');
        // Para guardar el objeto (lo que es un insert tipico)
        $bebida -> save();

        // Esto es para que nos direccione a una url (no a una vista cuidao)
        return redirect('bebidas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bebida = Bebida::find($id);
        return view('bebidas/show', ['bebida' => $bebida]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bebida = Bebida::find($id);
        return view ('bebidas/edit', ['bebida'=> $bebida]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bebida = Bebida::find($id);

        $bebida -> nombre = $request -> input('nombre');
        $bebida -> precio = $request -> input('precio');
        $bebida -> tipo = $request -> input('tipo');
        $bebida->save();

        return redirect('bebidas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
