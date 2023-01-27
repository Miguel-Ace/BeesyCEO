<?php

namespace App\Http\Controllers;

use App\Models\BalanceDiario;
use Illuminate\Http\Request;

class BalanceDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = BalanceDiario::paginate(15);
        return view('balanceDiario.index', compact('datos'));
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
            'fecha' => 'required|date|unique:balance_diarios',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        BalanceDiario::insert($datos);
        return redirect('/balanceDiario')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BalanceDiario  $balanceDiario
     * @return \Illuminate\Http\Response
     */
    public function show(BalanceDiario $balanceDiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BalanceDiario  $balanceDiario
     * @return \Illuminate\Http\Response
     */
    public function edit(BalanceDiario $balanceDiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BalanceDiario  $balanceDiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BalanceDiario $balanceDiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BalanceDiario  $balanceDiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(BalanceDiario $balanceDiario)
    {
        //
    }
}
