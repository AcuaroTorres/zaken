<?php

namespace App\Http\Controllers\Recursos;

use App\Recursos\Telefono;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonos = Telefono::All();
        return view('recursos/telefono/index')
            ->with('telefonos', $telefonos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function directorio()
    {
        $telefonos = Telefono::All();
        return view('recursos/telefono/directorio')
            ->with('telefonos', $telefonos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recursos/telefono/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefono = new Telefono($request->All());
        $telefono->save();

        session()->flash('info', 'El telefono '.$telefono->numero.' ha sido creado.');

        return redirect()->route('recursos.telefono.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recurso\Telefono  $telefono
     * @return \Illuminate\Http\Response
     */
    public function show(Telefono $telefono)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recurso\Telefono  $telefono
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefono $telefono)
    {
        return view('recursos/telefono/edit')->with('telefono', $telefono);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recurso\Telefono  $telefono
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telefono $telefono)
    {
        $telefono->fill($request->all());
        $telefono->save();

        session()->flash('success', 'El telefono '.$telefono->numero.' ha sido actualizado.');

        return redirect()->route('recursos.telefono.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recurso\Telefono  $telefono
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefono $telefono)
    {
        $telefono->delete();

        session()->flash('success', 'El telefono '.$telefono->numero.' ha sido eliminado');

        return redirect()->route('recursos.telefono.index');
    }
}
