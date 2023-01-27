<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeSeo - @yield('titulo')</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <header>
        <div class="cabeceraPrincipal">
            <h1 class="logo">
                <a href="{{url('/')}}">
                    BeêsyCEO
                </a>
            </h1>

            <nav class="contenedorcatalogo" style="display: none">
                <p class="clickañadir">Añadir Valor</p>

                <ul class="catalogo" id="catalogo">
                    <li><a href="{{url('/apartadoDiario')}}">Apartado Diario</a></li>
                    <li><a href="{{url('/balanceDiario')}}">Balance Diario</a></li>
                    <li><a href="{{url('/cotizacionesDiario')}}">Cotizaciones Diarias</a></li>
                    <li><a href="{{url('/detalleCotizacionesDiario')}}">Detalle de Cotizaciones Diarias</a></li>
                    <li><a href="{{url('/detalleVentaDiario')}}">Detalle de Ventas Diarias</a></li>
                    <li><a href="{{url('/devolucionesDiario')}}">Devoluciones Diarias</a></li>
                    <li><a href="{{url('/egresosDiario')}}">Egresos Diario</a></li>
                    <li><a href="{{url('/ingresosBancoDiario')}}">Ingresos al Banco Diario</a></li>
                    <li><a href="{{url('/ingresosCajaDiario')}}">Ingresos a Caja Diario</a></li>
                    <li><a href="{{url('/ingresosExtraordinarioDiario')}}">Ingresos Extraordinarios Diario</a></li>
                    <li><a href="{{url('/ingresosPendienteApartadoDiario')}}">Ingresos Pendiente Apartado Diario</a></li>
                    <li><a href="{{url('/reciboDiario')}}">Recibo Diario</a></li>
                    <li><a href="{{url('/saldoPendienteCliente')}}">Saldo Pendiente Cliente</a></li>
                    <li><a href="{{url('/saldoPendienteProveedor')}}">Saldo Pendiente Proveedor</a></li>
                    <li><a href="{{url('/totalApartado')}}">Total Apartado</a></li>
                    <li><a href="{{url('/totalExistencia')}}">Total Existencia</a></li>
                    <li><a href="{{url('/ventasDiaria')}}">Ventas Diaria</a></li>
                </ul>
            </nav>

            {{-- <nav class="ventasrealizada">
                <a href="">Ventas del Día</a>
                <a href="">Ventas del mes</a>
            </nav> --}}

            @auth
                <nav class="derderAuth">
                    <a href="" style="cursor: unset">Hola: <span>{{auth()->user()->username}}</span></a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="submit" style="background: none; color: white; border: none; font-size: 1rem; font-weight: bolder; cursor: pointer;">Cerrar Sesión</button>
                    </form>
                </nav>
            @endauth
            @guest
                <nav class="derNoAuth">
                    <a href="{{route('login')}}">Login</a>
                    <a href="{{route('register')}}">Registro</a>
                </nav>
            @endguest
        </div>
    </header>

    <main>
        <h2 class="nombreEmpresa">@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer>
        Derechos Reservados Beêsy Bussines Suite {{date('Y')}}
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @yield('scripts')
</body>
</html>
