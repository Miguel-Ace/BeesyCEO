<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VentasDiara;
use Illuminate\Http\Request;
use App\Models\BalanceDiario;
use App\Models\EgresosDiario;
use App\Models\RecibosDiario;
use App\Models\TotalApartado;
use App\Models\ApartadosDiario;
use App\Models\TotalExistencia;
use App\Models\CotizacionesDiaria;
use App\Models\DetalleVentaDiario;
use App\Models\DevolucionesDiaria;
use App\Models\IngresosCajaDiario;
use App\Models\IngresosBancoDiario;
use Illuminate\Support\Facades\Hash;
use App\Models\SaldoPendienteCliente;
use App\Models\SaldoPendienteProveedore;
use App\Models\DetalleCotizacionesDiario;
use App\Models\IngresosExtraordinarioDiario;
use App\Models\IngresosPendienteApartadoDiaro;

class ApiController extends Controller
{
    //Apartado diario
    public function getApartadoDiario(){
        return response()->json(ApartadosDiario::all(),200);
    }

    public function getApartadoDiarioId($id){
        $apartadoDiario = ApartadosDiario::find($id);
        if (empty($apartadoDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($apartadoDiario,200);
    }

    public function insertApartadoDiario(Request $request){
        $apartadoDiario = ApartadosDiario::create($request->all());
        if (empty($apartadoDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($apartadoDiario,200);
    }

    public function updateApartadoDiario(Request $request, $id){
        $apartadoDiario = ApartadosDiario::find($id);
        if (empty($apartadoDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $apartadoDiario->update($request->all());
        return response()->json($apartadoDiario,200);
    }

    //Balance diario
    public function getBalanceDiario(){
        return response()->json(BalanceDiario::all(),200);
    }

    public function getBalanceDiarioId($id){
        $balanceDiario = BalanceDiario::find($id);
        if (empty($balanceDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($balanceDiario,200);
    }

    public function insertBalanceDiario(Request $request){
        $balanceDiario = BalanceDiario::create($request->all());
        if (empty($balanceDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($balanceDiario,200);
    }

    public function updateBalanceDiario(Request $request, $id){
        $balanceDiario = BalanceDiario::find($id);
        if (empty($balanceDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $balanceDiario->update($request->all());
        return response()->json($balanceDiario,200);
    }

    //Cotizaciones diario
    public function getCotizacionesDiario(){
        return response()->json(CotizacionesDiaria::all(),200);
    }

    public function getCotizacionesDiarioId($id){
        $cotizacionesDiaria = CotizacionesDiaria::find($id);
        if (empty($cotizacionesDiaria)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($cotizacionesDiaria,200);
    }

    public function insertCotizacionesDiario(Request $request){
        $cotizacionesDiaria = CotizacionesDiaria::create($request->all());
        if (empty($cotizacionesDiaria)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($cotizacionesDiaria,200);
    }

    public function updateCotizacionesDiario(Request $request, $id){
        $cotizacionesDiaria = CotizacionesDiaria::find($id);
        if (empty($cotizacionesDiaria)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $cotizacionesDiaria->update($request->all());
        return response()->json($cotizacionesDiaria,200);
    }

    //Detalle Cotizaciones diario
    public function getDetalleCotizacionesDiario(){
        return response()->json(DetalleCotizacionesDiario::all(),200);
    }

    public function getDetalleCotizacionesDiarioId($id){
        $detalleCotizacionesDiario = DetalleCotizacionesDiario::find($id);
        if (empty($detalleCotizacionesDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($detalleCotizacionesDiario,200);
    }

    public function insertDetalleCotizacionesDiario(Request $request){
        $detalleCotizacionesDiario = DetalleCotizacionesDiario::create($request->all());
        if (empty($detalleCotizacionesDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($detalleCotizacionesDiario,200);
    }

    public function updateDetalleCotizacionesDiario(Request $request, $id){
        $detalleCotizacionesDiario = DetalleCotizacionesDiario::find($id);
        if (empty($detalleCotizacionesDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $detalleCotizacionesDiario->update($request->all());
        return response()->json($detalleCotizacionesDiario,200);
    }

    //Detalle Venta diario
    public function getDetalleVentaDiario(){
        return response()->json(DetalleVentaDiario::all(),200);
    }

    public function getDetalleVentaDiarioId($id){
        $detalleVentaDiario = DetalleVentaDiario::find($id);
        if (empty($detalleVentaDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($detalleVentaDiario,200);
    }

    public function insertDetalleVentaDiario(Request $request){
        $detalleVentaDiario = DetalleVentaDiario::create($request->all());
        if (empty($detalleVentaDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($detalleVentaDiario,200);
    }

    public function updateDetalleVentaDiario(Request $request, $id){
        $detalleVentaDiario = DetalleVentaDiario::find($id);
        if (empty($detalleVentaDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $detalleVentaDiario->update($request->all());
        return response()->json($detalleVentaDiario,200);
    }

    //Devoluciones diario
    public function getDevolucionesDiario(){
        return response()->json(DevolucionesDiaria::all(),200);
    }

    public function getDevolucionesDiarioId($id){
        $devolucionesDiaria = DevolucionesDiaria::find($id);
        if (empty($devolucionesDiaria)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($devolucionesDiaria,200);
    }

    public function insertDevolucionesDiario(Request $request){
        $devolucionesDiaria = DevolucionesDiaria::create($request->all());
        if (empty($devolucionesDiaria)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($devolucionesDiaria,200);
    }

    public function updateDevolucionesDiario(Request $request, $id){
        $devolucionesDiaria = DevolucionesDiaria::find($id);
        if (empty($devolucionesDiaria)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $devolucionesDiaria->update($request->all());
        return response()->json($devolucionesDiaria,200);
    }

    //Egresos diario
    public function getEgresosDiario(){
        return response()->json(EgresosDiario::all(),200);
    }

    public function getEgresosDiarioId($id){
        $egresosDiario = EgresosDiario::find($id);
        if (empty($egresosDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($egresosDiario,200);
    }

    public function insertEgresosDiario(Request $request){
        $egresosDiario = EgresosDiario::create($request->all());
        if (empty($egresosDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($egresosDiario,200);
    }

    public function updateEgresosDiario(Request $request, $id){
        $egresosDiario = EgresosDiario::find($id);
        if (empty($egresosDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $egresosDiario->update($request->all());
        return response()->json($egresosDiario,200);
    }

    //Ingresos Banco diario
    public function getIngresosBancoDiario(){
        return response()->json(IngresosBancoDiario::all(),200);
    }

    public function getIngresosBancoDiarioId($id){
        $ingresosBancoDiario = IngresosBancoDiario::find($id);
        if (empty($ingresosBancoDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($ingresosBancoDiario,200);
    }

    public function insertIngresosBancoDiario(Request $request){
        $ingresosBancoDiario = IngresosBancoDiario::create($request->all());
        if (empty($ingresosBancoDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($ingresosBancoDiario,200);
    }

    public function updateIngresosBancoDiario(Request $request, $id){
        $ingresosBancoDiario = IngresosBancoDiario::find($id);
        if (empty($ingresosBancoDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $ingresosBancoDiario->update($request->all());
        return response()->json($ingresosBancoDiario,200);
    }

    //Ingresos Caja diario
    public function getIngresosCajaDiario(){
        return response()->json(IngresosCajaDiario::all(),200);
    }

    public function getIngresosCajaDiarioId($id){
        $ingresosCajaDiario = IngresosCajaDiario::find($id);
        if (empty($ingresosCajaDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($ingresosCajaDiario,200);
    }

    public function insertIngresosCajaDiario(Request $request){
        $ingresosCajaDiario = IngresosCajaDiario::create($request->all());
        if (empty($ingresosCajaDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($ingresosCajaDiario,200);
    }

    public function updateIngresosCajaDiario(Request $request, $id){
        $ingresosCajaDiario = IngresosCajaDiario::find($id);
        if (empty($ingresosCajaDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $ingresosCajaDiario->update($request->all());
        return response()->json($ingresosCajaDiario,200);
    }

    //Ingresos Extraordinarios diario
    public function getIngresosExtraordinariosDiario(){
        return response()->json(IngresosExtraordinarioDiario::all(),200);
    }

    public function getIngresosExtraordinariosDiarioId($id){
        $ingresosExtraordinarioDiario = IngresosExtraordinarioDiario::find($id);
        if (empty($ingresosExtraordinarioDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($ingresosExtraordinarioDiario,200);
    }

    public function insertIngresosExtraordinariosDiario(Request $request){
        $ingresosExtraordinarioDiario = IngresosExtraordinarioDiario::create($request->all());
        if (empty($ingresosExtraordinarioDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($ingresosExtraordinarioDiario,200);
    }

    public function updateIngresosExtraordinariosDiario(Request $request, $id){
        $ingresosExtraordinarioDiario = IngresosExtraordinarioDiario::find($id);
        if (empty($ingresosExtraordinarioDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $ingresosExtraordinarioDiario->update($request->all());
        return response()->json($ingresosExtraordinarioDiario,200);
    }

    //Ingresos Pendiente diario
    public function getIngresosPendienteDiario(){
        return response()->json(IngresosPendienteApartadoDiaro::all(),200);
    }

    public function getIngresosPendienteDiarioId($id){
        $ingresosPendienteApartadoDiaro = IngresosPendienteApartadoDiaro::find($id);
        if (empty($ingresosPendienteApartadoDiaro)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($ingresosPendienteApartadoDiaro,200);
    }

    public function insertIngresosPendienteDiario(Request $request){
        $ingresosPendienteApartadoDiaro = IngresosPendienteApartadoDiaro::create($request->all());
        if (empty($ingresosPendienteApartadoDiaro)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($ingresosPendienteApartadoDiaro,200);
    }

    public function updateIngresosPendienteDiario(Request $request, $id){
        $ingresosPendienteApartadoDiaro = IngresosPendienteApartadoDiaro::find($id);
        if (empty($ingresosPendienteApartadoDiaro)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $ingresosPendienteApartadoDiaro->update($request->all());
        return response()->json($ingresosPendienteApartadoDiaro,200);
    }

    //Recibo diario
    public function getReciboDiario(){
        return response()->json(RecibosDiario::all(),200);
    }

    public function getReciboDiarioId($id){
        $recibosDiario = RecibosDiario::find($id);
        if (empty($recibosDiario)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($recibosDiario,200);
    }

    public function insertReciboDiario(Request $request){
        $recibosDiario = RecibosDiario::create($request->all());
        if (empty($recibosDiario)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($recibosDiario,200);
    }

    public function updateReciboDiario(Request $request, $id){
        $recibosDiario = RecibosDiario::find($id);
        if (empty($recibosDiario)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $recibosDiario->update($request->all());
        return response()->json($recibosDiario,200);
    }

    //Saldo Pendiente Cliente
    public function getSaldoPendienteCliente(){
        return response()->json(SaldoPendienteCliente::all(),200);
    }

    public function getSaldoPendienteClienteId($id){
        $saldoPendienteCliente = SaldoPendienteCliente::find($id);
        if (empty($saldoPendienteCliente)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($saldoPendienteCliente,200);
    }

    public function insertSaldoPendienteCliente(Request $request){
        $saldoPendienteCliente = SaldoPendienteCliente::create($request->all());
        if (empty($saldoPendienteCliente)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($saldoPendienteCliente,200);
    }

    public function updateSaldoPendienteCliente(Request $request, $id){
        $saldoPendienteCliente = SaldoPendienteCliente::find($id);
        if (empty($saldoPendienteCliente)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $saldoPendienteCliente->update($request->all());
        return response()->json($saldoPendienteCliente,200);
    }

    //Saldo Pendiente Proveedor
    public function getSaldoPendienteProveedor(){
        return response()->json(SaldoPendienteProveedore::all(),200);
    }

    public function getSaldoPendienteProveedorId($id){
        $saldoPendienteProveedore = SaldoPendienteProveedore::find($id);
        if (empty($saldoPendienteProveedore)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($saldoPendienteProveedore,200);
    }

    public function insertSaldoPendienteProveedor(Request $request){
        $saldoPendienteProveedore = SaldoPendienteProveedore::create($request->all());
        if (empty($saldoPendienteProveedore)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($saldoPendienteProveedore,200);
    }

    public function updateSaldoPendienteProveedor(Request $request, $id){
        $saldoPendienteProveedore = SaldoPendienteProveedore::find($id);
        if (empty($saldoPendienteProveedore)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $saldoPendienteProveedore->update($request->all());
        return response()->json($saldoPendienteProveedore,200);
    }

    //Total Apartado
    public function getTotalApartado(){
        return response()->json(TotalApartado::all(),200);
    }

    public function getTotalApartadoId($id){
        $totalApartado = TotalApartado::find($id);
        if (empty($totalApartado)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($totalApartado,200);
    }

    public function insertTotalApartador(Request $request){
        $totalApartado = TotalApartado::create($request->all());
        if (empty($totalApartado)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($totalApartado,200);
    }

    public function updateTotalApartado(Request $request, $id){
        $totalApartado = TotalApartado::find($id);
        if (empty($totalApartado)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $totalApartado->update($request->all());
        return response()->json($totalApartado,200);
    }

    //Total Existencia
    public function getTotalExistencia(){
        return response()->json(TotalExistencia::all(),200);
    }

    public function getTotalExistenciaId($id){
        $totalExistencia = TotalExistencia::find($id);
        if (empty($totalExistencia)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($totalExistencia,200);
    }

    public function insertTotalExistencia(Request $request){
        $totalExistencia = TotalExistencia::create($request->all());
        if (empty($totalExistencia)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($totalExistencia,200);
    }

    public function updateTotalExistencia(Request $request, $id){
        $totalExistencia = TotalExistencia::find($id);
        if (empty($totalExistencia)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $totalExistencia->update($request->all());
        return response()->json($totalExistencia,200);
    }

    //Venta Diaria
    public function getVentaDiaria(){
        return response()->json(VentasDiara::all(),200);
    }

    public function getVentaDiariaId($id){
        $ventasDiara = VentasDiara::find($id);
        if (empty($ventasDiara)) {
            return response()->json(['Mensaje'=>'No Hay Datos Disponibles'],404);
        }
        return response()->json($ventasDiara,200);
    }

    public function insertVentaDiaria(Request $request){
        $ventasDiara = VentasDiara::create($request->all());
        if (empty($ventasDiara)) {
            return response()->json(['Mensaje'=>'Hubo un Problema al Insertar Los Datos'],404);
        }
        return response()->json($ventasDiara,200);
    }

    public function updateVentaDiaria(Request $request, $id){
        $ventasDiara = VentasDiara::find($id);
        if (empty($ventasDiara)) {
            return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
        }
        $ventasDiara->update($request->all());
        return response()->json($ventasDiara,200);
    }
}
