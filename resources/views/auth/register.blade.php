@extends('layout.app')

@section('titulo')
    Regístrate
@endsection

@section('contenido')
    <div class="contenedor">
        <div class="imagenForm">
            <img src="{{asset('img/register.jpg')}}" alt="">
        </div>
        <form action="{{route('register')}}" method="post" novalidate>
            @csrf
            <div class="campo">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" style="@error('name') border: 2px solid #EC7063 @enderror">
                @error('name')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>
            <div class="campo">
                <label for="name">username</label>
                <input type="text" name="username" id="username" value="{{old('username')}}" style="@error('username') border: 2px solid #EC7063 @enderror">
                @error('username')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>
            <div class="campo">
                <label for="empresa">empresa</label>
                <input type="text" name="empresa" id="empresa" value="{{old('empresa')}}" style="@error('empresa') border: 2px solid #EC7063 @enderror">
                @error('empresa')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>
            <div class="campo">
                <label for="cod_empresa">Codigo de Empresa</label>
                <input type="text" name="cod_empresa" id="cod_empresa" value="{{old('cod_empresa')}}" style="@error('cod_empresa') border: 2px solid #EC7063 @enderror">
                @error('cod_empresa')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>
            <div class="campo">
                <label for="email">email</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" style="@error('email') border: 2px solid #EC7063 @enderror">
                @error('email')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="password">password</label>
                <input type="password" name="password" id="password" style="@error('password') border: 2px solid #EC7063 @enderror">
                @error('password')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="password_confirmation">Confirmar password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" style="@error('password_confirmation') border: 2px solid #EC7063 @enderror">
                @error('password_confirmation')
                    <p class="mensajeError">{{$message}}</p>
                @enderror
            </div>

            <input type="submit" value="Guardar Datos" class="btnEnviar">
        </form>
    </div>
@endsection
