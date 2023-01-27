@extends('layout.app')

@section('titulo')
    Inicia Sesión
@endsection

@section('contenido')
    <div class="contenedor">
        <div class="imagenForm">
            <img src="{{asset('img/login.jpg')}}" width="600" alt="">
        </div>
        <form action="{{route('login')}}" method="post" style="height: 310px" novalidate>
            @csrf

            @if (session('mensaje'))
                <p class="mensajeError">{{session('mensaje')}}</p>
            @endif

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
            <input type="submit" value="Iniciar Sesión" class="btnEnviar">
        </form>
    </div>
@endsection
