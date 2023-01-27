<?php

namespace App\Http\Controllers;

use App\Models\DetalleCotizacionesDiario;
use Illuminate\Http\Request;

class DetalleCotizacionesDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DetalleCotizacionesDiario::paginate(15);
        return view('detalleCotizacionesDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:detalle_cotizaciones_diarios',
            'reservada' => 'required',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        DetalleCotizacionesDiario::insert($datos);
        return redirect('/detalleCotizacionesDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleCotizacionesDiario  $detalleCotizacionesDiario
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleCotizacionesDiario $detalleCotizacionesDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleCotizacionesDiario  $detalleCotizacionesDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleCotizacionesDiario $detalleCotizacionesDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleCotizacionesDiario  $detalleCotizacionesDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleCotizacionesDiario $detalleCotizacionesDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleCotizacionesDiario  $detalleCotizacionesDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleCotizacionesDiario $detalleCotizacionesDiario)
    {
        //
    }
}
