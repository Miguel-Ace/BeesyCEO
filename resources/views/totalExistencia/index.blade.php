@extends('layout.app')

@section('titulo')
   Tabla: Total Existencia
@endsection

@section('contenido')
    <div class="formulario">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código de Empresa</th>
                    <th>Monto Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->cod_empresa}}</td>
                        <td>{{$dato->monto_total}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('success'))
            <div>
                <p style="color: rgb(44, 105, 44)">{{session('success')}}</p>
            </div>
        @endif
        <form action="{{url('/totalExistencia')}}" method="post" class="formtablas">
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
                    <label for="monto_total">Monto Total</label>
                    <input type="number" id="monto_total" name="monto_total" min="0" style="@error('monto_total') border: 2px solid red @enderror" value="{{old('monto_total')}}">
                    @error('monto_total')
                        <p style="color: red">El campo Monto Total es requerido</p>
                    @enderror
                </div>
            </div>

            <div class="contenedorbtn">
                <input type="submit" value="Guardar" class="btnEnviar">
            </div>
        </form>
    </div>
@endsection
