@extends('layout.app')

@section('titulo')
   Tabla: Saldo Pendiente Cliente
@endsection

@section('contenido')
    <div class="formulario">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código de Empresa</th>
                    <th>Saldo Pendiente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->cod_empresa}}</td>
                        <td>{{$dato->saldo_pendiente}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('success'))
            <div>
                <p style="color: rgb(44, 105, 44)">{{session('success')}}</p>
            </div>
        @endif
        <form action="{{url('/saldoPendienteCliente')}}" method="post" class="formtablas">
            @csrf
            <div>
                <div>
                    <label for="cod_empresa">Código de Empresa</label>
                    <input type="text" id="cod_empresa" name="cod_empresa" style="@error('cod_empresa') border: 2px solid red @enderror" value="{{old('cod_empresa')}}">
                    @error('cod_empresa')
                        <p style="color: red">El campo Código de Empresa es requerido</p>
                    @enderror
                </div>

                <div>
                    <label for="saldo_pendiente">Saldo Pendiente</label>
                    <input type="number" id="saldo_pendiente" name="saldo_pendiente" min="0" style="@error('saldo_pendiente') border: 2px solid red @enderror" value="{{old('saldo_pendiente')}}">
                    @error('saldo_pendiente')
                        <p style="color: red">El campo Saldo Pendiente es requerido</p>
                    @enderror
                </div>
            </div>

            <div class="contenedorbtn">
                <input type="submit" value="Guardar" class="btnEnviar">
            </div>
        </form>
    </div>
@endsection
