<?php

namespace App\Http\Controllers;

use App\Models\IngresosBancoDiario;
use Illuminate\Http\Request;

class IngresosBancoDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = IngresosBancoDiario::paginate(15);
        return view('ingresosBancoDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:ingresos_banco_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        IngresosBancoDiario::insert($datos);
        return redirect('/ingresosBancoDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngresosBancoDiario  $ingresosBancoDiario
     * @return \Illuminate\Http\Response
     */
    public function show(IngresosBancoDiario $ingresosBancoDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngresosBancoDiario  $ingresosBancoDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(IngresosBancoDiario $ingresosBancoDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IngresosBancoDiario  $ingresosBancoDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngresosBancoDiario $ingresosBancoDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngresosBancoDiario  $ingresosBancoDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngresosBancoDiario $ingresosBancoDiario)
    {
        //
    }
}
