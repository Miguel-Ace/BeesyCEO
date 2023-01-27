<?php

namespace App\Http\Controllers;

use App\Models\ApartadosDiario;
use Illuminate\Http\Request;

class ApartadosDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = ApartadosDiario::paginate(15);
        return view('apartadoDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:apartados_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        ApartadosDiario::insert($datos);
        return redirect('/apartadoDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApartadosDiario  $apartadosDiario
     * @return \Illuminate\Http\Response
     */
    public function show(ApartadosDiario $apartadosDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApartadosDiario  $apartadosDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(ApartadosDiario $apartadosDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApartadosDiario  $apartadosDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApartadosDiario $apartadosDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApartadosDiario  $apartadosDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApartadosDiario $apartadosDiario)
    {
        //
    }
}
