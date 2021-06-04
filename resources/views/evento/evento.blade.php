@extends('layout')

@section('title', 'Sobre mi')

@section('content')

<div class="container">
    <p class="lead">
    <h3>Evento</h3>
    <p>Detalles de evento</p>
    <a class="btn btn-default"  href="{{ asset('/evento/index') }}">Atras</a>
    <hr>



    <div class="col-md-6">
      <form action="{{ asset('/evento/create/') }}" method="post">
        <div class="fomr-group">
          <h4>Titulo</h4>
          {{ $event->titulo }}
        </div>
        <div class="fomr-group">
          <h4>Descripcion del Evento</h4>
          {!! $event->descripcion !!}
        </div>
        <div class="fomr-group">
          <h4>Fecha</h4>
          {{ $event->fecha }}
        </div>
        <br>
        <input type="submit" class="btn btn-info" value="Guardar">
      </form>
    </div>


    <!-- inicio de semana -->


  </div> <!-- /container -->

      @endsection
