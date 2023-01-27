<?php

namespace App\Http\Controllers;

use App\Models\SaldoPendienteProveedore;
use Illuminate\Http\Request;

class SaldoPendienteProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = SaldoPendienteProveedore::paginate(15);
        return view('saldoPendienteProveedor.index', compact('datos'));
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
        SaldoPendienteProveedore::insert($datos);
        return redirect('/saldoPendienteProveedor')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaldoPendienteProveedore  $saldoPendienteProveedore
     * @return \Illuminate\Http\Response
     */
    public function show(SaldoPendienteProveedore $saldoPendienteProveedore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaldoPendienteProveedore  $saldoPendienteProveedore
     * @return \Illuminate\Http\Response
     */
    public function edit(SaldoPendienteProveedore $saldoPendienteProveedore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaldoPendienteProveedore  $saldoPendienteProveedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaldoPendienteProveedore $saldoPendienteProveedore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaldoPendienteProveedore  $saldoPendienteProveedore
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaldoPendienteProveedore $saldoPendienteProveedore)
    {
        //
    }
}
