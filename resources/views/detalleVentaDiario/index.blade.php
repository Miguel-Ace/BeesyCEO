@extends('layout.app')

@section('titulo')
   Tabla: Detalle Venta Diario
@endsection

@section('contenido')
    <div class="formulario">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código de Empresa</th>
                    <th>Num de ventasRPT</th>
                    <th>Tipo</th>
                    <th>Código Cliente</th>
                    <th>Nombre de cliente</th>
                    <th>Fecha</th>
                    <th>SubTotal</th>
                    <th>IGV</th>
                    <th>Num Documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->cod_empresa}}</td>
                        <td>{{$dato->num_ventas_rpt}}</td>
                        <td>{{$dato->tipo}}</td>
                        <td>{{$dato->cod_cliente}}</td>
                        <td>{{$dato->nombre_cliente}}</td>
                        <td>{{$dato->fecha}}</td>
                        <td>{{$dato->sub_total}}</td>
                        <td>{{$dato->igv}}</td>
                        <td>{{$dato->num_documento}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('success'))
            <div>
                <p style="color: rgb(44, 105, 44)">{{session('success')}}</p>
            </div>
        @endif
        <form action="{{url('/detalleVentaDiario')}}" method="post" class="formtablas">
            @csrf
            <div>
                <label for="cod_empresa">Código de Empresa</label>
                <input type="text" id="cod_empresa" name="cod_empresa" style="@error('cod_empresa') border: 2px solid red @enderror" value="{{old('cod_empresa')}}">
                @error('cod_empresa')
                    <p style="color: red">El campo Código de Empresa es requerido</p>
                @enderror
            </div>

            <div>
                <label for="num_ventas_rpt">Num de ventasRPT</label>
                <input type="number" id="num_ventas_rpt" name="num_ventas_rpt" min="0" style="@error('num_ventas_rpt') border: 2px solid red @enderror" value="{{old('num_ventas_rpt')}}">
                @error('num_ventas_rpt')
                    <p style="color: red">El campo Num de ventasRPT es requerido</p>
                @enderror
            </div>

            <div>
                <label for="tipo">Tipo</label>
                <input type="text" id="tipo" name="tipo" style="@error('tipo') border: 2px solid red @enderror" value="{{old('tipo')}}">
                @error('tipo')
                    <p style="color: red">El campo Tipo es requerido</p>
                @enderror
            </div>

            <div>
                <label for="cod_cliente">Código Cliente</label>
                <input type="text" id="cod_cliente" name="cod_cliente" style="@error('cod_cliente') border: 2px solid red @enderror" value="{{old('cod_cliente')}}">
                @error('cod_cliente')
                    <p style="color: red">El campo Código Cliente es requerido</p>
                @enderror
            </div>

            <div>
                <label for="nombre_cliente">Nombre Cliente</label>
                <input type="text" id="nombre_cliente" name="nombre_cliente" style="@error('nombre_cliente') border: 2px solid red @enderror" value="{{old('nombre_cliente')}}">
                @error('nombre_cliente')
                    <p style="color: red">El campo Nombre Cliente es requerido</p>
                @enderror
            </div>

            <div>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" style="@error('fecha') border: 2px solid red @enderror" value="{{old('fecha')}}">
                @error('fecha')
                    <p style="color: red">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="sub_total">Subtotal</label>
                <input type="number" id="sub_total" name="sub_total" min="0" style="@error('sub_total') border: 2px solid red @enderror" value="{{old('sub_total')}}">
                @error('sub_total')
                    <p style="color: red">El campo Subtotal es requerido</p>
                @enderror
            </div>

            <div>
                <label for="igv">IGV</label>
                <input type="number" id="igv" name="igv" min="0" style="@error('igv') border: 2px solid red @enderror" value="{{old('igv')}}">
                @error('igv')
                    <p style="color: red">El campo IGV es requerido</p>
                @enderror
            </div>

            <div>
                <label for="num_documento">Numero Documento</label>
                <input type="number" id="num_documento" name="num_documento" min="1" style="@error('num_documento') border: 2px solid red @enderror" value="{{old('num_documento')}}">
                @error('num_documento')
                    <p style="color: red">El campo Numero Documento es requerido</p>
                @enderror
            </div>

            <input type="submit" value="Guardar" class="btnEnviar">
        </form>
    </div>
@endsection
