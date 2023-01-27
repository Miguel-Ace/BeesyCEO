<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Users
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/userinfo',[AuthController::class, 'infouser'])->middleware('auth:sanctum');

//Apartado diario
Route::get('/apartadoDiario', [ApiController::class, 'getApartadoDiario']);
Route::get('/apartadoDiario/{id}', [ApiController::class, 'getApartadoDiarioId']);
Route::post('/apartadoDiario/insert', [ApiController::class, 'insertApartadoDiario']);
Route::put('/apartadoDiario/update/{id}', [ApiController::class, 'updateApartadoDiario']);

//Balance diario
Route::get('/balanceDiario', [ApiController::class, 'getBalanceDiario']);
Route::get('/balanceDiario/{id}', [ApiController::class, 'getBalanceDiarioId']);
Route::post('/balanceDiario/insert', [ApiController::class, 'insertBalanceDiario']);
Route::put('/balanceDiario/update/{id}', [ApiController::class, 'updateBalanceDiario']);

//Cotizaciones diario
Route::get('/cotizacionesDiario', [ApiController::class, 'getCotizacionesDiario']);
Route::get('/cotizacionesDiario/{id}', [ApiController::class, 'getCotizacionesDiarioId']);
Route::post('/cotizacionesDiario/insert', [ApiController::class, 'insertCotizacionesDiario']);
Route::put('/cotizacionesDiario/update/{id}', [ApiController::class, 'updateCotizacionesDiario']);

//Detalle Cotizaciones diario
Route::get('/detalleCotizacionesDiario', [ApiController::class, 'getDetalleCotizacionesDiario']);
Route::get('/detalleCotizacionesDiario/{id}', [ApiController::class, 'getDetalleCotizacionesDiarioId']);
Route::post('/detalleCotizacionesDiario/insert', [ApiController::class, 'insertDetalleCotizacionesDiario']);
Route::put('/detalleCotizacionesDiario/update/{id}', [ApiController::class, 'updateDetalleCotizacionesDiario']);

//Detalle Venta diario
Route::get('/detalleVentaDiario', [ApiController::class, 'getDetalleVentaDiario']);
Route::get('/detalleVentaDiario/{id}', [ApiController::class, 'getDetalleVentaDiarioId']);
Route::post('/detalleVentaDiario/insert', [ApiController::class, 'insertDetalleVentaDiario']);
Route::put('/detalleVentaDiario/update/{id}', [ApiController::class, 'updateDetalleVentaDiario']);

//Devoluciones diario
Route::get('/devolucionesDiario', [ApiController::class, 'getDevolucionesDiario']);
Route::get('/devolucionesDiario/{id}', [ApiController::class, 'getDevolucionesDiarioId']);
Route::post('/devolucionesDiario/insert', [ApiController::class, 'insertDevolucionesDiario']);
Route::put('/devolucionesDiario/update/{id}', [ApiController::class, 'updateDevolucionesDiario']);

//Egresos diario
Route::get('/egresosDiario', [ApiController::class, 'getEgresosDiario']);
Route::get('/egresosDiario/{id}', [ApiController::class, 'getEgresosDiarioId']);
Route::post('/egresosDiario/insert', [ApiController::class, 'insertEgresosDiario']);
Route::put('/egresosDiario/update/{id}', [ApiController::class, 'updateEgresosDiario']);

//Ingresos Banco diario
Route::get('/ingresosBancoDiario', [ApiController::class, 'getIngresosBancoDiario']);
Route::get('/ingresosBancoDiario/{id}', [ApiController::class, 'getIngresosBancoDiarioId']);
Route::post('/ingresosBancoDiario/insert', [ApiController::class, 'insertIngresosBancoDiario']);
Route::put('/ingresosBancoDiario/update/{id}', [ApiController::class, 'updateIngresosBancoDiario']);

//Ingresos Caja diario
Route::get('/ingresosCajaDiario', [ApiController::class, 'getIngresosCajaDiario']);
Route::get('/ingresosCajaDiario/{id}', [ApiController::class, 'getIngresosCajaDiarioId']);
Route::post('/ingresosCajaDiario/insert', [ApiController::class, 'insertIngresosCajaDiario']);
Route::put('/ingresosCajaDiario/update/{id}', [ApiController::class, 'updateIngresosCajaDiario']);

//Ingresos Extraordinarios diario
Route::get('/ingresosExtraordinarioDiario', [ApiController::class, 'getIngresosExtraordinariosDiario']);
Route::get('/ingresosExtraordinarioDiario/{id}', [ApiController::class, 'getIngresosExtraordinariosDiarioId']);
Route::post('/ingresosExtraordinarioDiario/insert', [ApiController::class, 'insertIngresosExtraordinariosDiario']);
Route::put('/ingresosExtraordinarioDiario/update/{id}', [ApiController::class, 'updateIngresosExtraordinariosDiario']);

//Ingresos Pendiente diario
Route::get('/ingresosPendienteApartadoDiario', [ApiController::class, 'getIngresosPendienteDiario']);
Route::get('/ingresosPendienteApartadoDiario/{id}', [ApiController::class, 'getIngresosPendienteDiarioId']);
Route::post('/ingresosPendienteApartadoDiario/insert', [ApiController::class, 'insertIngresosPendienteDiario']);
Route::put('/ingresosPendienteApartadoDiario/update/{id}', [ApiController::class, 'updateIngresosPendienteDiario']);

//Recibo diario
Route::get('/reciboDiario', [ApiController::class, 'getReciboDiario']);
Route::get('/reciboDiario/{id}', [ApiController::class, 'getReciboDiarioId']);
Route::post('/reciboDiario/insert', [ApiController::class, 'insertReciboDiario']);
Route::put('/reciboDiario/update/{id}', [ApiController::class, 'updateReciboDiario']);

//Saldo Pendiente Cliente
Route::get('/saldoPendienteCliente', [ApiController::class, 'getSaldoPendienteCliente']);
Route::get('/saldoPendienteCliente/{id}', [ApiController::class, 'getSaldoPendienteClienteId']);
Route::post('/saldoPendienteCliente/insert', [ApiController::class, 'insertSaldoPendienteCliente']);
Route::put('/saldoPendienteCliente/update/{id}', [ApiController::class, 'updateSaldoPendienteCliente']);

//Saldo Pendiente Proveedor
Route::get('/saldoPendienteProveedor', [ApiController::class, 'getSaldoPendienteProveedor']);
Route::get('/saldoPendienteProveedor/{id}', [ApiController::class, 'getSaldoPendienteProveedorId']);
Route::post('/saldoPendienteProveedor/insert', [ApiController::class, 'insertSaldoPendienteProveedor']);
Route::put('/saldoPendienteProveedor/update/{id}', [ApiController::class, 'updateSaldoPendienteProveedor']);

//Total Apartado
Route::get('/totalApartado', [ApiController::class, 'getTotalApartado']);
Route::get('/totalApartado/{id}', [ApiController::class, 'getTotalApartadoId']);
Route::post('/totalApartado/insert', [ApiController::class, 'insertTotalApartador']);
Route::put('/totalApartado/update/{id}', [ApiController::class, 'updateTotalApartado']);

//Total Existencia
Route::get('/totalExistencia', [ApiController::class, 'getTotalExistencia']);
Route::get('/totalExistencia/{id}', [ApiController::class, 'getTotalExistenciaId']);
Route::post('/totalExistencia/insert', [ApiController::class, 'insertTotalExistencia']);
Route::put('/totalExistencia/update/{id}', [ApiController::class, 'updateTotalExistencia']);

//Venta Diaria
Route::get('/ventasDiaria', [ApiController::class, 'getVentaDiaria']);
Route::get('/ventasDiaria/{id}', [ApiController::class, 'getVentaDiariaId']);
Route::post('/ventasDiaria/insert', [ApiController::class, 'insertVentaDiaria']);
Route::put('/ventasDiaria/update/{id}', [ApiController::class, 'updateVentaDiaria']);
