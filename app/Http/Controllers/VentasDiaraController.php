<?php

namespace App\Http\Controllers;

use App\Models\VentasDiara;
use Illuminate\Http\Request;
use App\Models\ApartadosDiario;

class VentasDiaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = VentasDiara::paginate(15);
        return view('ventasDiaria.index', compact('datos'));
    }

    public function chartjs()
    {
        $codEmpresa = auth()->user()->cod_empresa;


        $apartadosDiarios = ApartadosDiario::all();
        foreach ($apartadosDiarios as $apartadosDiario) {
            if ($codEmpresa == $apartadosDiario->cod_empresa) {
                $data2['label'][] = $apartadosDiario->fecha;
                $data2['data'][] = $apartadosDiario->monto_total;
            }
        }
        $data['data2'] = json_encode($data2);
        // =================================
        $ventasDiarios = VentasDiara::all();
        foreach ($ventasDiarios as $ventasDiario) {
            if ($codEmpresa == $ventasDiario->cod_empresa) {
                $data1['label'][] = $ventasDiario->fecha;
                $data1['data'][] = $ventasDiario->monto_total;
            }
        }

        $data['data1'] = json_encode($data1);

        // $data = ['ventasDiarios' => $ventasDiarios];
        // response()->json($data, 200, [], JSON_NUMERIC_CHECK);

        return view('ventasDiaria.graficos', $data);
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
            'fecha' => 'required|date|unique:ventas_diaras',
            'monto_total' => 'required|min:0|numeric',
        ]);

        $datos = $request->except('_token');
        VentasDiara::insert($datos);
        return redirect('/ventasDiaria')->with('success', 'Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VentasDiara  $ventasDiara
     * @return \Illuminate\Http\Response
     */
    public function show(VentasDiara $ventasDiara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VentasDiara  $ventasDiara
     * @return \Illuminate\Http\Response
     */
    public function edit(VentasDiara $ventasDiara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VentasDiara  $ventasDiara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VentasDiara $ventasDiara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VentasDiara  $ventasDiara
     * @return \Illuminate\Http\Response
     */
    public function destroy(VentasDiara $ventasDiara)
    {
        //
    }
}
