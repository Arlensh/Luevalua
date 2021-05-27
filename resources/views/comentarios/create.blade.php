@extends('layout')

@section('title', 'Crear Comentario')

@section('content')
    <h1>Crear Comentario</h1>

    {{-- @include('partials.validation-errors') --}}

    <form action="{{ route('comentarios.store') }}" method="POST">
        @csrf
        <label for="">
            Titulo
            {{-- <input type="text" name="title" value="{{ old('title', $comentario->title) }}"> --}}
            <input type="text" name="title" value="">
        </label>
        <br>
        <label for="">
            Descripcion
            {{-- <textarea name="description">{{ old('description', $comentario->description) }}</textarea> --}}
            <textarea name="description"></textarea>
        </label>
        <br>
        <label class="" for="">
            user
            {{-- <input type="text" name="title" value="{{ old('title', $comentario->title) }}"> --}}
            <input type="text" name="title" value="{{ Auth::user()->name }}">
        </label>
        <label class="" for="">
            centro
            {{-- <input type="text" name="title" value="{{ old('title', $comentario->title) }}"> --}}
            <input type="text" name="title" value="{{$centro->id}}">
        </label>
        <button>boton</button>
    </form>

@endsection
