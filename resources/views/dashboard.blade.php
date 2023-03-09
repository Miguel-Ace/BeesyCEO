@extends('layout.app')

@section('titulo')
    {{auth()->user()->empresa}}
@endsection

@section('contenido')
<section class="contenedorCanva">
    <div class="partesuperior">

        <div class="datosunicos uno">
            <p>Saldo Pendiente Clientes</p>
            <div>
                <div class="logo">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
                <div class="monto">
                    <span>$
                        @foreach ($saldoPendienteClientes as $saldoPendienteCliente)
                            @if ($saldoPendienteCliente->cod_empresa == $codEmpresa)
                                {{$saldoPendienteCliente->saldo_pendiente}}
                            @endif
                        @endforeach
                    </span>
                    <p>Ventas de hoy</p>
                </div>
            </div>
        </div>{{--Fin--}}

        <div class="datosunicos dos">
            <p>Saldo Pendiente Proveedores</p>
            <div>
                <div class="logo">
                    <ion-icon name="calculator-outline"></ion-icon>
                </div>
                <div class="monto">
                    <span>$
                        @foreach ($saldoPendienteProveedores as $saldoPendienteProveedore)
                            @if ($saldoPendienteProveedore->cod_empresa == $codEmpresa)
                                {{$saldoPendienteProveedore->saldo_pendiente}}
                            @endif
                        @endforeach
                    </span>
                    <p>Ventas de hoy</p>
                </div>
            </div>
        </div>{{--Fin--}}

        <div class="datosunicos tres">
            <p>Total Costo Producto</p>
            <div>
                <div class="logo">
                    <ion-icon name="book-outline"></ion-icon>
                </div>
                <div class="monto">
                    <span>$
                        @foreach ($totalExistencias as $totalExistencia)
                            @if ($totalExistencia->cod_empresa == $codEmpresa)
                                {{$totalExistencia->monto_total}}
                            @endif
                        @endforeach
                    </span>
                    <p>Ventas de hoy</p>
                </div>
            </div>
        </div>{{--Fin--}}

        <div class="datosunicos cuatro">
            <p>Total Apartados</p>
            <div>
                <div class="logo">
                    <ion-icon name="layers-outline"></ion-icon>
                </div>
                <div class="monto">
                    <span>$
                        @foreach ($totalApartados as $totalApartado)
                            @if ($totalApartado->cod_empresa == $codEmpresa)
                                {{$totalApartado->monto_total}}
                            @endif
                        @endforeach
                    </span>
                    <p>Ventas de hoy</p>
                </div>
            </div>
        </div>{{--Fin--}}

    </div>

    <div class="parteinferior">
        <div class="grafos guno">
            <p>Ventas Diarias</p>
            <canvas id="myChart"></canvas>
        </div>
        <div class="grafos gdos">
            {{-- <p>Ingresos al Banco Diario</p> --}}
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    {{-- <div class="parteinferiordos">
    </div> --}}
    
    <div class="parteinferiordos">
        <div class="grafos gtres">
            {{-- <p>Apartado Diario</p> --}}
            <canvas id="myChart3"></canvas>
        </div>
        <div class="grafos gcuatro">
            {{-- <p>Ingreso caja Diario</p> --}}
            <canvas id="myChart4"></canvas>
        </div>
    
        <div class="grafos gcinco">
            {{-- <p>Ingreso Extraordinario Diario</p> --}}
            <canvas id="myChart5"></canvas>
        </div>

        <div class="grafos gseis">
            {{-- <p>Apartado Diario</p> --}}
            <canvas id="myChart6"></canvas>
        </div>
        <div class="grafos gsiete">
            {{-- <p>Ingreso caja Diario</p> --}}
            <canvas id="myChart7"></canvas>
        </div>

        <div class="grafos gocho">
            {{-- <p>Ingreso Extraordinario Diario</p> --}}
            <canvas id="myChart8"></canvas>
        </div>

        <div class="grafos gnueve">
            {{-- <p>Apartado Diario</p> --}}
            <canvas id="myChart9"></canvas>
        </div>
        <div class="grafos gdiez">
            {{-- <p>Ingreso caja Diario</p> --}}
            <canvas id="myChart10"></canvas>
        </div>
    
        <div class="grafos gonce">
            {{-- <p>Ingreso Extraordinario Diario</p> --}}
            <canvas id="myChart11"></canvas>
        </div>
    </div>

    {{-- <div class="parteinferiordos">
    </div> --}}
</section>

    <div class="informacionGeneral">
        <div class="formulario2 uno">
            <p>Detalle Cotizaciones Diarias</p>
            <table>
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        {{-- <td>Código de Empresa</td> --}}
                        <td>Fecha</td>
                        <td>Reserva</td>
                        <td>Monto</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalleCotizacionesDiarias as $detalleCotizacionesDiaria)
                        @if ($codEmpresa == $detalleCotizacionesDiaria->cod_empresa)
                            <tr>
                                {{-- <td>{{$detalleVentaDiaria->id}}</td> --}}
                                {{-- <td>{{$detalleVentaDiaria->cod_empresa}}</td> --}}
                                <td style="color: green">{{$detalleCotizacionesDiaria->fecha}}</td>
                                <td>{{$detalleCotizacionesDiaria->reserva}}</td>
                                <td>{{$detalleCotizacionesDiaria->monto_total}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="formulario2 dos">
            <p>Detalle Ventas Diarias</p>
            <table>
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        {{-- <td>Código de Empresa</td> --}}
                        <td>Nombre Cliente</td>
                        <td>Código Cliente</td>
                        <td>Numero Ventas RPT</td>
                        <td>Tipo</td>
                        <td>Fecha</td>
                        <td>SubTotal</td>
                        <td>IGV</td>
                        <td># Documento</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalleVentaDiarias as $detalleVentaDiaria)
                        @if ($codEmpresa == $detalleVentaDiaria->cod_empresa)
                            <tr>
                                {{-- <td>{{$detalleVentaDiaria->id}}</td> --}}
                                {{-- <td>{{$detalleVentaDiaria->cod_empresa}}</td> --}}
                                <td>{{$detalleVentaDiaria->nombre_cliente}}</td>
                                <td>{{$detalleVentaDiaria->cod_cliente}}</td>
                                <td style="color: green">{{$detalleVentaDiaria->num_ventas_rpt}}</td>
                                <td>{{$detalleVentaDiaria->tipo}}</td>
                                <td style="color: green">{{$detalleVentaDiaria->fecha}}</td>
                                <td>{{$detalleVentaDiaria->sub_total}}</td>
                                <td>{{$detalleVentaDiaria->igv}}</td>
                                <td>{{$detalleVentaDiaria->num_documento}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        const cData = JSON.parse(`<?php echo $data1; ?>`);
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'pie',
        data: {
            labels: cData.label,
            datasets: [{
            label: 'Ventas Diarias',
            data: cData.data,
            borderWidth: 1,
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData2 = JSON.parse(`<?php echo $data2; ?>`);
        const ctx2 = document.getElementById('myChart2');

        // DOS
        new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: cData2.label,
            datasets: [{
            label: 'Ingresos al Banco Diario',
            data: cData2.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(192, 57, 34)',
                'rgb(244, 208, 63)',
                'rgb(41, 128, 185)',
                'rgb(0, 139, 140)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData3 = JSON.parse(`<?php echo $data3; ?>`);
        const ctx3 = document.getElementById('myChart3');

        // DOS
        new Chart(ctx3, {
        type: 'line',
        data: {
            labels: cData3.label,
            datasets: [{
            label: 'Apartado Diarios',
            data: cData3.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(0, 139, 140)',
                'rgb(192, 57, 34)',
                'rgb(244, 208, 63)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData4 = JSON.parse(`<?php echo $data4; ?>`);
        const ctx4 = document.getElementById('myChart4');

        // DOS
        new Chart(ctx4, {
        type: 'line',
        data: {
            labels: cData4.label,
            datasets: [{
            label: 'Ingreso caja Diario',
            data: cData4.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(41, 128, 185)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData5 = JSON.parse(`<?php echo $data5; ?>`);
        const ctx5 = document.getElementById('myChart5');

        // DOS
        new Chart(ctx5, {
        type: 'line',
        data: {
            labels: cData5.label,
            datasets: [{
            label: 'Ingreso Extraordinario Diario',
            data: cData5.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(245, 183, 177)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData6 = JSON.parse(`<?php echo $data6; ?>`);
        const ctx6 = document.getElementById('myChart6');

        // DOS
        new Chart(ctx6, {
        type: 'line',
        data: {
            labels: cData6.label,
            datasets: [{
            label: 'Recibo Diario',
            data: cData6.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(165, 105, 189)',
                'rgb(245, 183, 177)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData7 = JSON.parse(`<?php echo $data7; ?>`);
        const ctx7 = document.getElementById('myChart7');

        // DOS
        new Chart(ctx7, {
        type: 'line',
        data: {
            labels: cData7.label,
            datasets: [{
            label: 'Ingresos Pendiente Apartado Diario',
            data: cData7.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(52, 73, 94)',
                'rgb(160, 64, 0)',
                'rgb(165, 105, 189)',
                'rgb(245, 183, 177)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData8 = JSON.parse(`<?php echo $data8; ?>`);
        const ctx8 = document.getElementById('myChart8');

        // DOS
        new Chart(ctx8, {
        type: 'line',
        data: {
            labels: cData8.label,
            datasets: [{
            label: 'Egresos Diario',
            data: cData8.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(160, 64, 0)',
                'rgb(52, 73, 94)',
                'rgb(165, 105, 189)',
                'rgb(245, 183, 177)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData9 = JSON.parse(`<?php echo $data9; ?>`);
        const ctx9 = document.getElementById('myChart9');

        // DOS
        new Chart(ctx9, {
        type: 'line',
        data: {
            labels: cData9.label,
            datasets: [{
            label: 'Cotizaciones Diaro',
            data: cData9.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(52, 73, 94)',
                'rgb(165, 105, 189)',
                'rgb(160, 64, 0)',
                'rgb(245, 183, 177)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData10 = JSON.parse(`<?php echo $data10; ?>`);
        const ctx10 = document.getElementById('myChart10');

        // DOS
        new Chart(ctx10, {
        type: 'line',
        data: {
            labels: cData10.label,
            datasets: [{
            label: 'Devoluciones Diario',
            data: cData10.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(41, 128, 185)',
                'rgb(245, 183, 177)',
                'rgb(160, 64, 0)',
                'rgb(52, 73, 94)',
                'rgb(165, 105, 189)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(0, 139, 140)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const cData11 = JSON.parse(`<?php echo $data11; ?>`);
        const ctx11 = document.getElementById('myChart11');

        // DOS
        new Chart(ctx11, {
        type: 'line',
        data: {
            labels: cData11.label,
            datasets: [{
            label: 'Balance Diario',
            data: cData11.data,
            borderWidth: 1,
            backgroundColor: [
                'rgb(0, 139, 140)',
                'rgb(160, 64, 0)',
                'rgb(52, 73, 94)',
                'rgb(165, 105, 189)',
                'rgb(245, 183, 177)',
                'rgb(244, 208, 63)',
                'rgb(192, 57, 34)',
                'rgb(41, 128, 185)',
            ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
@endsection
