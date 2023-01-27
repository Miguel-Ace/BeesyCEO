<?php

namespace App\Http\Controllers;

use App\Models\IngresosCajaDiario;
use Illuminate\Http\Request;

class IngresosCajaDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = IngresosCajaDiario::paginate(15);
        return view('ingresosCajaDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:ingresos_caja_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        IngresosCajaDiario::insert($datos);
        return redirect('/ingresosCajaDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngresosCajaDiario  $ingresosCajaDiario
     * @return \Illuminate\Http\Response
     */
    public function show(IngresosCajaDiario $ingresosCajaDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngresosCajaDiario  $ingresosCajaDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(IngresosCajaDiario $ingresosCajaDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IngresosCajaDiario  $ingresosCajaDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngresosCajaDiario $ingresosCajaDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngresosCajaDiario  $ingresosCajaDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngresosCajaDiario $ingresosCajaDiario)
    {
        //
    }
}
