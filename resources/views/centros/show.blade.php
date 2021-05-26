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
            <a class="btn btn-primary" href="{{ route('centros.edit', $centro) }}">@lang('Edit')</a>
        @endauth
    </div>

    {{-- @auth
        <form action="{{ route('centros.destroy', $centro) }}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth --}}

    {!! $centro->content !!}

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    {{-- <h6 class="theme-color lead">Información general</h6> --}}
                    <div class="row about-list mb-5">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Direccion</label>
                                <p>{{ $centro->direccion }}</p>
                            </div>
                            <div class="media">
                                <label>Número</label>
                                <p>{{ $centro->num }}</p>
                            </div>
                            <div class="media">
                                <label>Régimen</label>
                                <p>{{ $centro->regimen }}</p>
                            </div>
                            <div class="media">
                                <label>Tipo Via</label>
                                <p>{{ $centro->tipo_via }}</p>
                            </div>
                            <div class="media">
                                <label>CP</label>
                                <p>{{ $centro->cp }}</p>
                            </div>
                            <div class="media">
                                <label>Localidad</label>
                                <p>{{ $centro->localidad }}</p>
                            </div>
                            <div class="media">
                                <label>Provincia</label>
                                <p>{{ $centro->provincia }}</p>
                            </div>
                            <div class="media">
                                <label>Teléfono</label>
                                <p>{{ $centro->telefono }}</p>
                            </div>
                            <div class="media">
                                <label>Fax</label>
                                <p>{{ $centro->fax }}</p>
                            </div>
                            <div class="media">
                                <label>Comarca</label>
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

        // console.log(longValue);
        // console.log(latValue);

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

    </script>
@endsection
