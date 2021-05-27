@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Editar Proyecto</h1>
    Bienvenid@ {{ $nombre ?? 'Invitado' }}

    @include('partials.validation-errors')

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @method('PATCH')
        @include('projects._form', ['btnText' => 'Actualizar'])
    </form>

@endsection
