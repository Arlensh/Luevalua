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
                    <img style="width:100%;max-width:1200px;height:500px;" class="d-block img-fluid" src="https://s3.eu-west-3.amazonaws.com/buscocolegio-static-content/assets/46017675/0.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-dark">Ies la Sénia</h1>
                        <p class="text-dark">@lang('subtituloSenia')</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img style="width:100%;max-width:1200px;height:500px;" class="d-block img-fluid" src="https://www.isepceu.es/blog/wp-content/uploads/2017/07/slide2861-1024x4261.jpg" alt="">
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
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <img class="img-fluid my-4" src="/img/web_developer.svg" alt="Desarrollo Web">
            </div>
        </div>
        <div id="fifth" class="container-fluid px-3 py-5 p-sm-5">
            <div class="container marketing">
                <div class="row featurette pb-4">
                    <div class="col-md-8">
                        <h2 class="featurette-heading">
                            First featurette heading.
                            <span class="text-muted">It'll blow your mind.</span>
                        </h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perferendis totam aliquid tenetur voluptatibus cupiditate fuga
                            aliquam recusandae pariatur ex repudiandae, ratione hic
                            quibusdam. Libero facere asperiores incidunt magnam, velit
                            aperiam quos.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="featurette-image img-fluid mx-auto float-right w-100" data-src="holder.js/250x250/auto"
                            alt="250x250"
                            src="data:image/jpeg;base64,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"
                            data-holder-rendered="true" style="width: 250px; height: 250px" />
                    </div>
                </div>
                <hr class="featurette-divider" />
                <div class="row featurette mt-5 pb-4">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">
                            Oh yeah, it's that good.
                            <span class="text-muted">See for yourself.</span>
                        </h2>
                        <p class="lead">
                            Donec ullamcorper nulla non metus auctor fringilla. Vestibulum
                            id ligula porta felis euismod semper. Praesent commodo cursus
                            magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                            ac cursus commodo.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto float-left w-100" data-src="holder.js/250x250/auto"
                            alt="250x250"
                            src="https://www.um.es/documents/20989899/20992175/13399179/a854db61-644d-6982-be83-8df1f35e563e?t=1606399285317"
                            data-holder-rendered="true" style="width: 250px; height: 250px" />
                    </div>
                </div>
                <hr class="featurette-divider" />
                <div class="row featurette p-1 pt-3">
                    <div class="col-md-6">
                        <h2 class="featurette-heading">
                            Thats amazing brah.
                            <span class="text-muted">¡This page is awesome!</span>
                        </h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perferendis totam aliquid tenetur voluptatibus cupiditate fuga
                            aliquam recusandae pariatur ex repudiandae, ratione hic
                            quibusdam. Libero facere asperiores incidunt magnam, velit
                            aperiam quos.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="featurette-image img-fluid mx-auto w-100" data-src="holder.js/250x250/auto"
                            alt="250x250" src="https://www.grupoioe.es/wp-content/uploads/2019/10/informatica-2.jpg"
                            data-holder-rendered="true" style="width: 250px; height: 250px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    {{-- <script type="text/javascript">
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800,
                    },
                },
                color: {
                    value: "#ffffff",
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000",
                    },
                    polygon: {
                        nb_sides: 7,
                    },
                    image: {
                        src: "img/github.svg",
                        width: 100,
                        height: 100,
                    },
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false,
                    },
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false,
                    },
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1,
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200,
                    },
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "bubble",
                    },
                    onclick: {
                        enable: true,
                        mode: "push",
                    },
                    resize: true,
                },
                modes: {
                    grab: {
                        distance: 400,
                        line_linked: {
                            opacity: 1,
                        },
                    },
                    bubble: {
                        distance: 140,
                        size: 7.992007992007992,
                        duration: 2,
                        opacity: 0.5114885114885115,
                        speed: 3,
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4,
                    },
                    push: {
                        particles_nb: 4,
                    },
                    remove: {
                        particles_nb: 2,
                    },
                },
            },
            retina_detect: true,
        }); //var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;

    </script> --}}
@endsection
