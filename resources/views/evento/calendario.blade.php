@extends('layout')

@section('title', 'Sobre mi')

@section('content')

    <div class="container">

        <a class="btn btn-default"  href="{{ asset('/evento/form') }}">Crear un evento</a>

        <hr>

        <div class="row header-calendar"  >

          <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
            <a  href="{{ asset('/evento/event/') }}/<?= $data['last']; ?>" style="margin:10px;">
              <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
            </a>
            <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
            <a  href="{{ asset('/evento/event/') }}/<?= $data['next']; ?>" style="margin:10px;">
              <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
            </a>
          </div>

        </div>
        <div class="row">
          <div class="col header-col">Lunes</div>
          <div class="col header-col">Martes</div>
          <div class="col header-col">Miercoles</div>
          <div class="col header-col">Jueves</div>
          <div class="col header-col">Viernes</div>
          <div class="col header-col">Sabado</div>
          <div class="col header-col">Domingo</div>
        </div>
        <!-- inicio de semana -->
        @foreach ($data['calendar'] as $weekdata)
          <div class="row">
            <!-- ciclo de dia por semana -->
            @foreach  ($weekdata['datos'] as $dayweek)

            @if  ($dayweek['mes']==$mes)
              <div class="col box-day">
                {{ $dayweek['dia']  }}
                <!-- evento -->
                @foreach  ($dayweek['evento'] as $event)
                    <a class="badge badge-primary" href="{{ asset('/evento/details/') }}/{{ $event->id }}">
                      {{ $event->titulo }}
                    </a>
                @endforeach
              </div>
            @else
            <div class="col box-dayoff">
            </div>
            @endif


            @endforeach
          </div>
        @endforeach

      </div> <!-- /container -->

      @endsection
