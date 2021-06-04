@extends('layout')

@section('title', 'Evento')

@section('content')

<div class="container">

    <div class="col-md-12 ">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap border-bottom">
            <form action="{{ asset('/evento/create/') }}" method="post">
                <div class="fomr-group mt-3">
                    <h1>
                        <a class="btn" href="{{ asset('/evento/index') }}"><i class="fas fa-arrow-left"></i></a>
                        @if ($event->tipo==1) @lang('evento'):
                        @elseif ($event->tipo==2) @lang('noticia'):
                        @else @lang('otro'):
                        @endif
                        {{ $event->titulo }} ({{ $event->fecha }})
                    </h1>
                </div>
            </form>


            @auth
                @if (auth()->user()->centro===$event->centro || auth()->user()->role===1)
                    <form action={{ route('event.destroy', $event) }} method="POST" class="mt-3">
                        @csrf @method('DELETE')
                        <button type="buttont" class="btn text-danger"><i class="fas fa-trash"></i></button>
                    </form>
                @endif
            @endauth


        </div>
        <div class="fomr-group mt-5">
            {!! $event->descripcion !!}
        </div>
    </div>

    <!-- inicio de semana -->

  </div> <!-- /container -->

      @endsection
