<?php

namespace App\Http\Controllers;

use App\Models\IngresosExtraordinarioDiario;
use Illuminate\Http\Request;

class IngresosExtraordinarioDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = IngresosExtraordinarioDiario::paginate(15);
        return view('ingresosExtraordinarioDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:ingresos_extraordinario_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        IngresosExtraordinarioDiario::insert($datos);
        return redirect('/ingresosExtraordinarioDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngresosExtraordinarioDiario  $ingresosExtraordinarioDiario
     * @return \Illuminate\Http\Response
     */
    public function show(IngresosExtraordinarioDiario $ingresosExtraordinarioDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngresosExtraordinarioDiario  $ingresosExtraordinarioDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(IngresosExtraordinarioDiario $ingresosExtraordinarioDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IngresosExtraordinarioDiario  $ingresosExtraordinarioDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngresosExtraordinarioDiario $ingresosExtraordinarioDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngresosExtraordinarioDiario  $ingresosExtraordinarioDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngresosExtraordinarioDiario $ingresosExtraordinarioDiario)
    {
        //
    }
}
