<?php

namespace App\Http\Controllers\rrhh;

use App\rrhh\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::All();
        return view('rrhh/cargos/index')
            ->with('cargos', $cargos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rrhh/cargos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new Cargo($request->All());
        $cargo->save();

        session()->flash('info', 'El cargo '.$cargo->name.' ha sido creado.');

        return redirect()->route('rrhh.cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rrhh\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rrhh\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('rrhh/cargos/edit')->with('cargo',$cargo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rrhh\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $cargo->fill($request->all());
        $cargo->save();

        session()->flash('success', 'El cargo '.$cargo->name.' ha sido actualizado.');

        return redirect()->route('rrhh.cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rrhh\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        session()->flash('success', 'El cargo '.$cargo->name.' ha sido eliminado');

        return redirect()->route('rrhh.cargos.index');
    }
}
