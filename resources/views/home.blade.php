@extends('layout')


@section('title', 'Inicio')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
        <h1 class="h2">
            @lang('inicio')
        </h1>
    </div>
    <div class="container">
        <div class="carousel slide" id="main-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel" data-slide-to="1"></li>
            </ol><!-- /.carousel-indicators -->
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img style="width:100%;max-width:1200px;height:300px;" class="d-block img-fluid" src="https://s3.eu-west-3.amazonaws.com/buscocolegio-static-content/assets/46017675/0.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-dark">Ies la Sénia</h1>
                        <p class="text-dark">@lang('subtituloSenia')</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img style="width:100%;max-width:1200px;height:300px;" class="d-block img-fluid" src="https://www.isepceu.es/blog/wp-content/uploads/2017/07/slide2861-1024x4261.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div><!-- /.carousel-inner -->

            <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only" aria-hidden="true">Prev</span>
            </a>
            <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only" aria-hidden="true">Next</span>
            </a>
        </div><!-- /.carousel -->

        <div class="text-center m-5">
            <h2>
                @lang('eslogan')
            </h2>
            <p>
                @lang('bajoeslogan')
            </p>
          </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 mt-5">
                <p class="lead text-secondary">@lang('text1')</p>
                <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">@lang('contacto')</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('centros.index') }}">@lang('centros')</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('event.index') }}">@lang('calendario')</a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                <img class="img-fluid my-4 w-75" src="/img/web_developer.svg" alt="Desarrollo Web">
            </div>
        </div>
        <div id="fifth" class="container-fluid px-3 py-5 p-sm-5 border-top mt-5">
            <div class="container marketing">
                <div class="row featurette pb-4">
                    <div class="col-md-8">
                        <h2 class="featurette-heading">
                            @lang('home1')
                            <span class="text-muted">Luciano Barrera Páez</span>
                        </h2>
                        <p class="lead">
                            @lang('home2') <br>
                            <a class="btn btn-lg btn-block btn-primary mt-3" href="{{ route('about') }}">@lang('sobre mi')</a>
                        </p>
                    </div>

                </div>
                <hr class="featurette-divider" />
                <div class="row featurette mt-5 pb-4">
                    <div class="col-md-6 order-md-2">
                        <h2 class="featurette-heading">
                            @lang('home3')
                            <span class="text-muted">Ies La Senia.</span>
                        </h2>
                        <p class="lead">
                            @lang('home4')
                        </p>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <img class="featurette-image img-fluid mx-auto float-left w-100" data-src="holder.js/250x250/auto"
                            alt="250x250"
                            src="https://estaticos-cdn.prensaiberica.es/clip/d9eb007c-a0b2-49cb-b3b8-d340fc3b8ae1_16-9-aspect-ratio_default_0.jpg"
                            data-holder-rendered="true" style="width: 250px; height: 250px" />
                    </div>
                </div>
                <hr class="featurette-divider" />
                <div class="row featurette p-1 pt-3">
                    <div class="col-md-6">
                        <h2 class="featurette-heading">
                            @lang('home5')
                            <span class="text-muted">@lang('home6')</span>
                        </h2>
                        <p class="lead">
                            @lang('home7')
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="featurette-image img-fluid mx-auto w-100" data-src="holder.js/250x250/auto"
                            alt="250x250" src="https://www.isotools.org/wp-content/uploads/2014/02/rsc-centroseducativos.jpg"
                            data-holder-rendered="true" style="width: 250px; height: 250px" />
                    </div>
                </div>
                <hr class="featurette-divider" />
                <div class="row featurette mt-5 pb-4">
                    <div class="col-md-6 order-md-2">
                        <h2 class="featurette-heading">
                            @lang('home8')
                            <span class="text-muted">@lang('home9')</span>
                        </h2>
                        <p class="lead">
                            @lang('home10')
                        </p>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <img class="featurette-image img-fluid mx-auto float-left w-100" data-src="holder.js/250x250/auto"
                            alt="250x250"
                            src="https://cdnb.20m.es/sites/76/2018/11/El-curioso-origen-del-t%C3%A9rmino-%E2%80%98profesor%E2%80%99.jpg"
                            data-holder-rendered="true" style="width: 250px; height: 250px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
