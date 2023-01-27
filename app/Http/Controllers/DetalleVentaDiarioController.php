<?php

namespace App\Http\Controllers;

use App\Models\DetalleVentaDiario;
use Illuminate\Http\Request;

class DetalleVentaDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DetalleVentaDiario::paginate(15);
        return view('detalleVentaDiario.index', compact('datos'));
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
            'num_ventas_rpt' => 'required|min:0|numeric',
            'tipo' => 'required',
            'cod_cliente' => 'required',
            'nombre_cliente' => 'required',
            'fecha' => 'required|date|unique:detalle_venta_diarios',
            'sub_total' => 'required|min:0|numeric',
            'igv' => 'required',
            'num_documento' => 'required|min:1|numeric',
        ]);

        $datos = $request->except('_token');
        DetalleVentaDiario::insert($datos);
        return redirect('/detalleVentaDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleVentaDiario  $detalleVentaDiario
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleVentaDiario $detalleVentaDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleVentaDiario  $detalleVentaDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVentaDiario $detalleVentaDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleVentaDiario  $detalleVentaDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleVentaDiario $detalleVentaDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleVentaDiario  $detalleVentaDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleVentaDiario $detalleVentaDiario)
    {
        //
    }
}
