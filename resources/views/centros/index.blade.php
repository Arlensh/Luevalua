@extends('layout')

@section('title', 'Centro')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
        <h1 class="h2">
            @lang('centros')
        </h1>
    </div>
    <div class="container">
        {{-- @auth
            <a href="{{ route('centros.create') }}">Crear Proyecto</a>
        @endauth --}}
        {!! Form::open(['route' => 'centros.index', 'method' => 'GET', 'class' => '', 'role' => 'search']) !!}
        <div
            class="d-flex justify-content-between align-items-center pb-3 px-0 col-12 offset-md-5 col-md-7 offset-lg-7 col-lg-5">
            {!! Form::text('cntr', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            <button type="submit" class="btn btn-info ml-1">@lang('Search')</button>
        </div>
        {!! Form::close() !!}
        <ul class="list-group mb-5">
            @forelse($centros as $centro)
                <li class="link-group-item border-0 mb-3 shadow-sm bg-white">
                    <a class="d-flex justify-content-between align-items-center p-3"
                        href="{{ route('centros.show', $centro) }}">
                        <span class="text-secondary font-weight-bold">{{ $centro->denominacion_especifica }} @lang('from') {{ $centro->localidad }}</span>
                        <span class="text-black-50">{{ $centro->codigo }}</span>
                    </a>
                </li>
            @empty
                <li class="link-group-item border-0 mb-3 shadow-sm bg-white p-3 text-secondary font-weight-bold">
                    @lang('0result')
                </li>
            @endforelse
            <span class="mb-5">
                {{ $centros->links('pagination::bootstrap-4') }}
            </span>
        </ul>
    </div>
@endsection
