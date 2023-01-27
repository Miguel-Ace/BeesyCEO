<?php

namespace App\Http\Controllers;

use App\Models\TotalExistencia;
use Illuminate\Http\Request;

class TotalExistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = TotalExistencia::paginate(15);
        return view('totalExistencia.index', compact('datos'));
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
        TotalExistencia::insert($datos);
        return redirect('/totalExistencia')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TotalExistencia  $totalExistencia
     * @return \Illuminate\Http\Response
     */
    public function show(TotalExistencia $totalExistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TotalExistencia  $totalExistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(TotalExistencia $totalExistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TotalExistencia  $totalExistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TotalExistencia $totalExistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TotalExistencia  $totalExistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TotalExistencia $totalExistencia)
    {
        //
    }
}
