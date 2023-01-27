<?php

namespace App\Http\Controllers;

use App\Models\DevolucionesDiaria;
use Illuminate\Http\Request;

class DevolucionesDiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DevolucionesDiaria::paginate(15);
        return view('devolucionesDiario.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'cod_empresa' => 'required',
            'fecha' => 'required|date|unique:devoluciones_diarias',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        DevolucionesDiaria::insert($datos);
        return redirect('/devolucionesDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DevolucionesDiaria  $devolucionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function show(DevolucionesDiaria $devolucionesDiaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DevolucionesDiaria  $devolucionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function edit(DevolucionesDiaria $devolucionesDiaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DevolucionesDiaria  $devolucionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DevolucionesDiaria $devolucionesDiaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DevolucionesDiaria  $devolucionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(DevolucionesDiaria $devolucionesDiaria)
    {
        //
    }
}
