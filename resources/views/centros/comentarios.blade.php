{{-- @extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Centros</h1>
    @auth
        <a href="{{ route('comentarios.create') }}">Crear Proyecto</a>
    @endauth
    <ul>
        @forelse($centros as $centro)
            <li class="list-group-item border-0 mb-3-shadow-sm">
                <a class="d-flex justify-content-between align-items-center" href="{{ route('centros.show', $centro) }}">
                    <span class="text-secondary font-weight-bold">{{ $centro->denominacion_especifica }}</span>
                    <span class="text-black-50">{{ $centro->regimen }}</span>
                </a>
            </li>
        @empty
            <li class="list-group-item border-0 mb-3-shadow-sm">
                No existe ningun centro
            </li>
        @endforelse
        {{ $centros->links() }}
    </ul>
@endsection --}}




<h1>Comentarios</h1>
    @auth
        <a href="{{ route('centros.create') }}">Crear comentario</a>
    @endauth
    <ul>
        @forelse($comentarios as $comentario)
            <li class="list-group-item border-0 mb-3-shadow-sm">
                <a class="d-flex justify-content-between align-items-center" href="{{ route('centros.show', $comentario) }}">
                    <span class="text-secondary font-weight-bold">{{ $comentario->title }}</span>
                    <span class="text-black-50">{{ $comentario->description }}</span>
                    <span class="text-black-50">{{ $comentario->created_at->diffForHumans() }}</span>
                </a>
            </li>
        @empty
            <li class="list-group-item border-0 mb-3-shadow-sm">
                No existe ningun centro
            </li>
        @endforelse
    </ul>
