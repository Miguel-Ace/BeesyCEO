<?php

namespace App\Http\Controllers;

use App\Models\CotizacionesDiaria;
use Illuminate\Http\Request;

class CotizacionesDiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = CotizacionesDiaria::paginate(15);
        return view('cotizacionesDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:cotizaciones_diarias',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        CotizacionesDiaria::insert($datos);
        return redirect('/cotizacionesDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CotizacionesDiaria  $cotizacionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function show(CotizacionesDiaria $cotizacionesDiaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CotizacionesDiaria  $cotizacionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function edit(CotizacionesDiaria $cotizacionesDiaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CotizacionesDiaria  $cotizacionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CotizacionesDiaria $cotizacionesDiaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CotizacionesDiaria  $cotizacionesDiaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(CotizacionesDiaria $cotizacionesDiaria)
    {
        //
    }
}
