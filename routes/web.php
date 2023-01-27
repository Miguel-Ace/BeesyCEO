<?php

use App\Http\Controllers\ApartadosDiarioController;
use App\Http\Controllers\BalanceDiarioController;
use App\Http\Controllers\CotizacionesDiariaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetalleCotizacionesDiarioController;
use App\Http\Controllers\DetalleVentaDiarioController;
use App\Http\Controllers\DevolucionesDiariaController;
use App\Http\Controllers\EgresosDiarioController;
use App\Http\Controllers\IngresosBancoDiarioController;
use App\Http\Controllers\IngresosCajaDiarioController;
use App\Http\Controllers\IngresosExtraordinarioDiarioController;
use App\Http\Controllers\IngresosPendienteApartadoDiaroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RecibosDiarioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SaldoPendienteClienteController;
use App\Http\Controllers\SaldoPendienteProveedoreController;
use App\Http\Controllers\TotalApartadoController;
use App\Http\Controllers\TotalExistenciaController;
use App\Http\Controllers\VentasDiaraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/chartjs', [VentasDiaraController::class, 'chartjs']);


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/apartadoDiario', ApartadosDiarioController::class);
Route::resource('/balanceDiario', BalanceDiarioController::class);
Route::resource('/cotizacionesDiario', CotizacionesDiariaController::class);
Route::resource('/detalleCotizacionesDiario', DetalleCotizacionesDiarioController::class);
Route::resource('/detalleVentaDiario', DetalleVentaDiarioController::class);
Route::resource('/devolucionesDiario', DevolucionesDiariaController::class);
Route::resource('/egresosDiario', EgresosDiarioController::class);
Route::resource('/ingresosBancoDiario', IngresosBancoDiarioController::class);
Route::resource('/ingresosCajaDiario', IngresosCajaDiarioController::class);
Route::resource('/ingresosExtraordinarioDiario', IngresosExtraordinarioDiarioController::class);
Route::resource('/ingresosPendienteApartadoDiario', IngresosPendienteApartadoDiaroController::class);
Route::resource('/reciboDiario', RecibosDiarioController::class);
Route::resource('/saldoPendienteCliente', SaldoPendienteClienteController::class);
Route::resource('/saldoPendienteProveedor', SaldoPendienteProveedoreController::class);
Route::resource('/totalApartado', TotalApartadoController::class);
Route::resource('/totalExistencia', TotalExistenciaController::class);
Route::resource('/ventasDiaria', VentasDiaraController::class);

