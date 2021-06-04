@extends('layout')

@section('title', 'Evento')

@section('content')

<div class="container">

    <div class="col-md-12">
      <form action="{{ asset('/evento/create/') }}" method="post">
        <div class="fomr-group mt-3">
            <h1><a class="btn" href="{{ asset('/evento/index') }}"><i class="fas fa-arrow-left"></i></a> @lang('evento'): {{ $event->titulo }}</h1>

            <form method="post" action="{{ route('evento.destroy'), 1 }}">
                <!-- here the '1' is the id of the post which you want to delete -->

                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit">Delete</button>
            </form>


        </div>
        <div class="fomr-group mt-5">
          {!! $event->descripcion !!}
        </div>
        <div class="fomr-group">
          <h4>@lang('date')</h4>
          {{ $event->fecha }}
        </div>
        <br>
        {{-- <input type="submit" class="btn btn-info" value="Guardar"> --}}
      </form>
    </div>


    <!-- inicio de semana -->


  </div> <!-- /container -->

      @endsection
