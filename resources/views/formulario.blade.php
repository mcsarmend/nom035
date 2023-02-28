<!-- resources/views/formulario.blade.php -->

@extends('layouts.app')

@section('content')
    <form method="POST" action="/guardar">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}">
        </div>
        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required>{{ old('mensaje') }}</textarea>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection