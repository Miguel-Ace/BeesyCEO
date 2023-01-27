<?php

namespace App\Http\Controllers;

use App\Models\SaldoPendienteCliente;
use Illuminate\Http\Request;

class SaldoPendienteClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = SaldoPendienteCliente::paginate(15);
        return view('saldoPendienteCliente.index', compact('datos'));
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
            'saldo_pendiente' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        SaldoPendienteCliente::insert($datos);
        return redirect('/saldoPendienteCliente')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaldoPendienteCliente  $saldoPendienteCliente
     * @return \Illuminate\Http\Response
     */
    public function show(SaldoPendienteCliente $saldoPendienteCliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaldoPendienteCliente  $saldoPendienteCliente
     * @return \Illuminate\Http\Response
     */
    public function edit(SaldoPendienteCliente $saldoPendienteCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaldoPendienteCliente  $saldoPendienteCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaldoPendienteCliente $saldoPendienteCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaldoPendienteCliente  $saldoPendienteCliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaldoPendienteCliente $saldoPendienteCliente)
    {
        //
    }
}
