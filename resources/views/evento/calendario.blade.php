@extends('layout')

@section('title', 'Calendario')

@section('content')

    <div class="container">



        <div class="row header-calendar mt-3"  >

          <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
            <a  href="{{ asset('/evento/index/') }}/<?= $data['last']; ?>" style="margin:10px;">
              <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
            </a>
            <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?> @auth @if (auth()->user()->role===3 || auth()->user()->role===1)<a class="btn" href="{{ asset('/evento/form') }}"><i class="far fa-calendar-plus"></i></a>@endif @endauth </small></h2>
            <a  href="{{ asset('/evento/index/') }}/<?= $data['next']; ?>" style="margin:10px;">
              <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
            </a>
          </div>

        </div>
        <div class="row">
          <div class="col header-col">@lang('lunes')</div>
          <div class="col header-col">@lang('martes')</div>
          <div class="col header-col">@lang('miercoles')</div>
          <div class="col header-col">@lang('jueves')</div>
          <div class="col header-col">@lang('viernes')</div>
          <div class="col header-col">@lang('sabado')</div>
          <div class="col header-col">@lang('domingo')</div>
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
                    <a @if ($event->tipo==1) class="badge badge-primary"
                    @elseif ($event->tipo==2) class="badge badge-secondary"
                    @else class="badge badge-success"
                    @endif
                    href="{{ asset('/evento/details/') }}/{{ $event->id }}">
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
