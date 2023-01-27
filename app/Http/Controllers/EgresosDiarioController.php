<?php

namespace App\Http\Controllers;

use App\Models\EgresosDiario;
use Illuminate\Http\Request;

class EgresosDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = EgresosDiario::paginate(15);
        return view('egresosDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:egresos_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        EgresosDiario::insert($datos);
        return redirect('/egresosDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EgresosDiario  $egresosDiario
     * @return \Illuminate\Http\Response
     */
    public function show(EgresosDiario $egresosDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EgresosDiario  $egresosDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(EgresosDiario $egresosDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EgresosDiario  $egresosDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgresosDiario $egresosDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EgresosDiario  $egresosDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgresosDiario $egresosDiario)
    {
        //
    }
}
