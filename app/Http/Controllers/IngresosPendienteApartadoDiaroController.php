<?php

namespace App\Http\Controllers;

use App\Models\IngresosPendienteApartadoDiaro;
use Illuminate\Http\Request;

class IngresosPendienteApartadoDiaroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = IngresosPendienteApartadoDiaro::paginate(15);
        return view('ingresosPendienteApartadoDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:ingresos_pendiente_apartado_diaros',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        IngresosPendienteApartadoDiaro::insert($datos);
        return redirect('/ingresosPendienteApartadoDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngresosPendienteApartadoDiaro  $ingresosPendienteApartadoDiaro
     * @return \Illuminate\Http\Response
     */
    public function show(IngresosPendienteApartadoDiaro $ingresosPendienteApartadoDiaro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngresosPendienteApartadoDiaro  $ingresosPendienteApartadoDiaro
     * @return \Illuminate\Http\Response
     */
    public function edit(IngresosPendienteApartadoDiaro $ingresosPendienteApartadoDiaro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IngresosPendienteApartadoDiaro  $ingresosPendienteApartadoDiaro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngresosPendienteApartadoDiaro $ingresosPendienteApartadoDiaro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngresosPendienteApartadoDiaro  $ingresosPendienteApartadoDiaro
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngresosPendienteApartadoDiaro $ingresosPendienteApartadoDiaro)
    {
        //
    }
}
