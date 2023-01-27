<?php

namespace App\Http\Controllers;

use Mockery\Undefined;
use App\Models\VentasDiara;
use Illuminate\Http\Request;
use App\Models\TotalApartado;
use App\Models\ApartadosDiario;
use App\Models\BalanceDiario;
use App\Models\CotizacionesDiaria;
use App\Models\DetalleCotizacionesDiario;
use App\Models\DetalleVentaDiario;
use App\Models\DevolucionesDiaria;
use App\Models\EgresosDiario;
use App\Models\IngresosBancoDiario;
use App\Models\IngresosCajaDiario;
use App\Models\IngresosExtraordinarioDiario;
use App\Models\IngresosPendienteApartadoDiaro;
use App\Models\RecibosDiario;
use App\Models\SaldoPendienteCliente;
use App\Models\SaldoPendienteProveedore;
use App\Models\TotalExistencia;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $codEmpresa = auth()->user()->cod_empresa;

        // ==============Saldo Pendiente Clientes===============
        $saldoPendienteClientes = SaldoPendienteCliente::paginate(1);
        // ==============Saldo Pendiente Proveedores===============
        $saldoPendienteProveedores = SaldoPendienteProveedore::paginate(1);
        // ==============Total Existencia===============
        $totalExistencias = TotalExistencia::paginate(1);
        // ==============Total Apartado===============
        $totalApartados = TotalApartado::paginate(1);

        // ==============Detalle Cotizaciones Diario===============
        $detalleCotizacionesDiarias = DetalleCotizacionesDiario::paginate(6);
        // ==============Detalle Venta Diario===============
        $detalleVentaDiarias = DetalleVentaDiario::paginate(6);

        // ==============Engresos Diario===============
            $balanceDiarios = BalanceDiario::all();
            foreach ($balanceDiarios as $balanceDiario) {
                if ($codEmpresa == $balanceDiario->cod_empresa) {
                    $data11['label'][] = $balanceDiario->fecha;
                    $data11['data'][] = $balanceDiario->monto_total;
                }
            }
            $data['data11'] = json_encode($data11);

        // ==============Engresos Diario===============
            $devolucionesDiarias = DevolucionesDiaria::all();
            foreach ($devolucionesDiarias as $devolucionesDiaria) {
                if ($codEmpresa == $devolucionesDiaria->cod_empresa) {
                    $data10['label'][] = $devolucionesDiaria->fecha;
                    $data10['data'][] = $devolucionesDiaria->monto_total;
                }
            }
            $data['data10'] = json_encode($data10);

        // ==============Engresos Diario===============
            $cotizacionesDiarias = CotizacionesDiaria::all();
            foreach ($cotizacionesDiarias as $cotizacionesDiaria) {
                if ($codEmpresa == $cotizacionesDiaria->cod_empresa) {
                    $data9['label'][] = $cotizacionesDiaria->fecha;
                    $data9['data'][] = $cotizacionesDiaria->monto_total;
                }
            }
            $data['data9'] = json_encode($data9);

        // ==============Engresos Diario===============
            $egresosDiarios = EgresosDiario::all();
            foreach ($egresosDiarios as $egresosDiario) {
                if ($codEmpresa == $egresosDiario->cod_empresa) {
                    $data8['label'][] = $egresosDiario->fecha;
                    $data8['data'][] = $egresosDiario->monto_total;
                }
            }
            $data['data8'] = json_encode($data8);

        // ==============Ingresos Pendiente Apartada Diario===============
            $ingresosPendienteApartadoDiarios = IngresosPendienteApartadoDiaro::all();
            foreach ($ingresosPendienteApartadoDiarios as $ingresosPendienteApartadoDiario) {
                if ($codEmpresa == $ingresosPendienteApartadoDiario->cod_empresa) {
                    $data7['label'][] = $ingresosPendienteApartadoDiario->fecha;
                    $data7['data'][] = $ingresosPendienteApartadoDiario->monto_total;
                }
            }
            $data['data7'] = json_encode($data7);

        // ==============Recibos Diario===============
            $recibosDiarios = RecibosDiario::all();
            foreach ($recibosDiarios as $recibosDiario) {
                if ($codEmpresa == $recibosDiario->cod_empresa) {
                    $data6['label'][] = $recibosDiario->fecha;
                    $data6['data'][] = $recibosDiario->monto_total;
                }
            }
            $data['data6'] = json_encode($data6);

        // ==============Ingresos Extraordinario Diario===============
            $ingresosExtraordinarioDiarios = IngresosExtraordinarioDiario::all();
            foreach ($ingresosExtraordinarioDiarios as $ingresosExtraordinarioDiario) {
                if ($codEmpresa == $ingresosExtraordinarioDiario->cod_empresa) {
                    $data5['label'][] = $ingresosExtraordinarioDiario->fecha;
                    $data5['data'][] = $ingresosExtraordinarioDiario->monto_total;
                }
            }
            $data['data5'] = json_encode($data5);

        // ==============Ingresos Caja Diario===============
        $ingresosCajaDiarios = IngresosCajaDiario::all();
        foreach ($ingresosCajaDiarios as $ingresosCajaDiario) {
            if ($codEmpresa == $ingresosCajaDiario->cod_empresa) {
                $data4['label'][] = $ingresosCajaDiario->fecha;
                $data4['data'][] = $ingresosCajaDiario->monto_total;
            }
        }
        $data['data4'] = json_encode($data4);

        // ==============Ingresos Banco Diario===============
        $ingresosBancoDiarios = IngresosBancoDiario::all();
        foreach ($ingresosBancoDiarios as $ingresosBancoDiario) {
            if ($codEmpresa == $ingresosBancoDiario->cod_empresa) {
                $data2['label'][] = $ingresosBancoDiario->fecha;
                $data2['data'][] = $ingresosBancoDiario->monto_total;
            }
        }
        $data['data2'] = json_encode($data2);

        // ==============Ventas Diario===============
        $ventasDiarios = VentasDiara::all();
        foreach ($ventasDiarios as $ventasDiario) {
            if ($codEmpresa == $ventasDiario->cod_empresa) {
                $data1['label'][] = $ventasDiario->fecha;
                $data1['data'][] = $ventasDiario->monto_total;
            }
        }
        $data['data1'] = json_encode($data1);

        // ==============Apartado Diario===============
        $apartadosDiarios = ApartadosDiario::all();
        foreach ($apartadosDiarios as $apartadosDiario) {
            if ($codEmpresa == $apartadosDiario->cod_empresa) {
                $data3['label'][] = $apartadosDiario->fecha;
                $data3['data'][] = $apartadosDiario->monto_total;
            }
        }
        $data['data3'] = json_encode($data3);

        // $chart_options = [
        //     'chart_title' => 'Ventas Diario',
        //     'report_type' => 'group_by_string',
        //     'model' => 'App\Models\VentasDiara',
        //     'group_by_field' => 'fecha',
        //     'group_by_period' => 'month',
        //     'chart_type' => 'bar',
        //     'filter_field' => 'cod_empresa',
        // ];
        // $chart = new LaravelChart($chart_options);

        return view('dashboard', $data, compact('codEmpresa','detalleVentaDiarias','detalleCotizacionesDiarias','saldoPendienteClientes','saldoPendienteProveedores','totalExistencias','totalApartados','recibosDiarios'));
    }
}
