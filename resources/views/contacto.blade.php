@extends('plantilla')
@section('titulo', 'Contacto')

@section('Contenido')
    <h1>Contacto</h1>
    <form method="POST" action={{route('Contact')}}>
        @csrf
        <input name="nombre" placeholder="Nombre" value=""><br>
        <input type="email" name="email" placeholder="Email" value=""><br>
        <input name="subject" placeholder="Asunto" value=""><br>
        <textarea name="contenido" placeholder="Mensaje"></textarea><br>
        <button>Enviar</button>
    </form>
@endsection