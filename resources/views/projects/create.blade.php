@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear Proyecto</h1>
    Bienvenid@ {{ $nombre ?? 'Invitado' }}

    @include('partials.validation-errors')

    <form action="{{ route('projects.store') }}" method="POST">
        @include('projects._form', ['btnText' => 'Guardar'])
    </form>

@endsection
