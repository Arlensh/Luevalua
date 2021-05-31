@extends('layout')

@section('title', 'Centros | ' . $centro->denominacion_especifica)

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <style>
        #mimapa {
            height: 400px;
            z-index: 1;
        }

    </style>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
        <a class="btn d-none d-md-block position-absolute py-1 px-2" href="{{ route('centros.index') }}"><i class="fas fa-arrow-left"></i></a>
        <h1 class="h2 ml-md-5">
            {{ $centro->denominacion }}
        </h1>
        @auth
            @if (auth()->user()->centro===$centro->codigo && auth()->user()->role===3 || auth()->user()->role===1)
                <a class="btn btn-primary" href="{{ route('centros.edit', $centro) }}">@lang('Edit')</a>
            @endif
        @endauth
    </div>

    {!! $centro->content !!}

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <div class="row about-list mb-5">
                        <div class="col-md-6">
                            <div class="media">
                                <label>@lang('direccion')</label>
                                <p>{{ $centro->direccion }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('numero')</label>
                                <p>{{ $centro->num }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('regimen')</label>
                                <p>{{ $centro->regimen }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('tipo via')</label>
                                <p>{{ $centro->tipo_via }}</p>
                            </div>
                            <div class="media">
                                <label>CP</label>
                                <p>{{ $centro->cp }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('localidad')</label>
                                <p>{{ $centro->localidad }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('provincia')</label>
                                <p>{{ $centro->provincia }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('telefono')</label>
                                <p>{{ $centro->telefono }}</p>
                            </div>
                            <div class="media">
                                <label>Fax</label>
                                <p>{{ $centro->fax }}</p>
                            </div>
                            <div class="media">
                                <label>@lang('comarca')</label>
                                <p>{{ $centro->comarca }}</p>
                            </div>
                            <div class="media" style="display: none">
                                <label>Long</label>
                                <p id="long">{{ $centro->centros_long }}</p>
                            </div>
                            <div class="media" style="display: none">
                                <label>Lat</label>
                                <p id="lat">{{ $centro->centros_lat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar mb-4">
                    <div id="mimapa"></div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-top pt-3">
            <a class="btn d-none d-md-block position-absolute py-1 px-2" href="#"><i class="fas fa-arrow-up"></i></a>

            <h1 class="h2 ml-md-5">
                @lang('comentarios')
                @auth
                    @if (auth()->user()->centro===$centro->codigo || auth()->user()->role===1)
                        <a class="btn " href="{{ route('centros.create', $centro) }}"><i class="fas fa-plus"></i></a>
                    @endif
                @endauth
            </h1>

        </div>

        <ul>
            @forelse($comentarios as $comentario)
                @if ($comentario->id_centro===$centro->codigo)
                    <li class="list-group-item border-0 mb-3-shadow-sm d-flex justify-content-between align-items-center mb-1 mr-md-5">
                            <span class="text-secondary mr-5">

                                <span class="font-weight-bold">{{ $comentario->title }}</span>
                                <br>
                                @lang('autor') {{ $comentario->id_user}} <br>
                                {{ $comentario->description }}
                            </span>
                            <span class="text-black-50">{{ $comentario->created_at->diffForHumans() }}</span>
                              <form action="{{ route('centros.destroy',$centro,$comentario)}}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="buttont" class="btn text-danger"><i class="fas fa-flag"></i></button>
                                </form>
                    </li>
                @endif
                @empty
                <li class="list-group-item border-0 mb-3-shadow-sm">
                    @lang('nocomentarios')
                </li>
            @endforelse
        </ul>
    </div>



    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin="">
    </script>

    <script>
        var long = document.getElementById("long").innerHTML.replace(',', '.');;
        var lat = document.getElementById("lat").innerHTML.replace(',', '.');;

        var longValue = parseFloat(long);
        var latValue = parseFloat(lat);

        var mymap = L.map('mimapa').setView([latValue, longValue], 18);

        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 25,
                attribution: 'Datos del mapa de &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imágenes © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            }).addTo(mymap);

        //Agregar marcador personalizado
        // var marcador = L.icon({
        //     iconUrl: 'https://i.pinimg.com/originals/0f/61/ba/0f61ba72e0e12ba59d30a50295964871.png',
        //     iconSize: [60, 85]
        // });
        // var marker = L.marker([latValue, longValue], {
        //     icon: marcador
        // }).addTo(mymap);

        //Agregar mas marcadores
        // var marker2 = L.marker([37.1699, -3.968], {icon: marcador}).addTo(mymap);
        // var marker3 = L.marker([37.1697, -3.966], {icon: marcador}).addTo(mymap);

        //Agregar circulo
        // var circle = L.circle([37.1697, -3.964], {
        //     color: 'red',
        //     fillColor: '#f03',
        //     fillOpacity: 0.5,
        //     radius: 40
        // }).addTo(mymap);

        //Agregar poligonos
        // var polygon = L.polygon([
        //     [37.168474, -3.966202],
        //     [37.167482, -3.966827],
        //     [37.167602, -3.964477]
        // ]).addTo(mymap);

        //Agregar marcador
        var marker = L.marker([latValue, longValue]).addTo(mymap);

        //Pop up
        marker.bindPopup(
            "<b><strong>{{ $centro->denominacion }}</strong></b>");




            //evito que se recarge la página
            if (window.history.replaceState) { // verificamos disponibilidad
                window.history.replaceState(null, null, window.location.href);
            }
    </script>
@endsection
