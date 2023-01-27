<?php

namespace App\Http\Controllers;

use App\Models\RecibosDiario;
use Illuminate\Http\Request;

class RecibosDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = RecibosDiario::paginate(15);
        return view('reciboDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:recibos_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        RecibosDiario::insert($datos);
        return redirect('/reciboDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecibosDiario  $recibosDiario
     * @return \Illuminate\Http\Response
     */
    public function show(RecibosDiario $recibosDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecibosDiario  $recibosDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(RecibosDiario $recibosDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecibosDiario  $recibosDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecibosDiario $recibosDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecibosDiario  $recibosDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecibosDiario $recibosDiario)
    {
        //
    }
}
