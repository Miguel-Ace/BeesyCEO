<?php

namespace App\Http\Controllers;

use App\Models\TotalApartado;
use Illuminate\Http\Request;

class TotalApartadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = TotalApartado::paginate(15);
        return view('totalApartado.index', compact('datos'));
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
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        TotalApartado::insert($datos);
        return redirect('/totalApartado')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TotalApartado  $totalApartado
     * @return \Illuminate\Http\Response
     */
    public function show(TotalApartado $totalApartado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TotalApartado  $totalApartado
     * @return \Illuminate\Http\Response
     */
    public function edit(TotalApartado $totalApartado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TotalApartado  $totalApartado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TotalApartado $totalApartado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TotalApartado  $totalApartado
     * @return \Illuminate\Http\Response
     */
    public function destroy(TotalApartado $totalApartado)
    {
        //
    }
}
