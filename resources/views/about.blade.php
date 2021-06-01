@extends('layout')

@section('title', 'Sobre mi')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
        <h1 class="h2">
            @lang('sobre mi')
        </h1>
    </div>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-7">
                    <div class="about-text go-to">
                        <h6 class="theme-color lead">@lang('sobremiTitulo')</h6>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="clearfix mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne"><i
                                                class="fa fa-chevron-circle-down"></i>@lang('sobre mi')</a>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>@lang('sobremi1')</p>
                                        <p>@lang('sobremi2')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo"><i
                                                class="fa fa-chevron-circle-down"></i>@lang('estudios')</a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li class="my-2">@lang('est 1')</li>
                                            <li class="my-2">@lang('est 2')</li>
                                            <li class="my-2">@lang('est 3')</li>
                                            <li class="my-2">@lang('est 4')</li>
                                            <li class="my-2">@lang('est 5')</li>
                                            <li class="my-2">@lang('est 6')</li>
                                            <li class="my-2">
                                                <a
                                                    href="https://www.udemy.com/course/dominando-laravel-de-principiante-a-experto/">
                                                    @lang('est 7')
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"><i
                                                class="fa fa-chevron-circle-down"></i>@lang('experiencia')</a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <li class="nav-link">
                                            <h4 class="">@lang('tallina polütehnukum')</h4>
                                            <span>@lang('cargo ocupado') @lang('tecnico informatico')</span>
                                            <p>
                                            <h5 for=""><span>@lang('tareas realizadas')</span></h5>
                                            <ul>
                                                <li>@lang('tarea 1.1')</li>
                                                <li>@lang('tarea 1.2')</li>
                                                <li>@lang('tarea 1.3')</li>
                                                <li>@lang('tarea 1.4')</li>
                                                <li>@lang('tarea 1.5')</li>
                                            </ul>
                                            </p>
                                        </li>
                                        <li class="nav-link">
                                            <h4 class="">@lang('profesor guitarra')</h4>
                                            <span>@lang('cargo ocupado') @lang('profesor particular')</span>
                                            <p>
                                            <h5 for=""><span>@lang('tareas realizadas')</span></h5>
                                            <ul>
                                                <li>@lang('tarea 2.1')</li>
                                                <li>@lang('tarea 2.2')</li>
                                                <li>@lang('tarea 2.3')</li>
                                            </ul>
                                            </p>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row about-list mb-5">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>@lang('cumple')</label>
                                    <p>@lang('cumple info')</p>
                                </div>
                                <div class="media">
                                    <label>@lang('año')</label>
                                    <p>@lang('año info')</p>
                                </div>
                                <div class="media">
                                    <label>@lang('residencia')</label>
                                    <p>@lang('residencia info')</p>
                                </div>
                                <div class="media">
                                    <label>@lang('direccion')</label>
                                    <p>@lang('direccion info')</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>@lang('email')</label>
                                    <p>lucianobarrerapaez@gmail.com</p>
                                </div>
                                <div class="media">
                                    <label>@lang('telefono')</label>
                                    <p>662-572-560</p>
                                </div>
                                <div class="media">
                                    <label>Discord</label>
                                    <p>Arlensh#0346</p>
                                </div>
                                <div class="media">
                                    <label>@lang('trabajo')</label>
                                    <p>@lang('trabajo info')</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="media">
                                    <label>@lang('programas')</label>
                                    <p>Windows, Linux, Microsoft Office, Java, JavaScript, Php,
                                        Bash, Wordpress, Bootstrap, Css, Sass, Html5, Laravel, Vue.js, Angular, Mysql,
                                        HeidiSQL, PhpMyAdmin, Github...</p>
                                </div>
                                <div class="media">
                                    <label>@lang('importante')</label>
                                    <p>@lang('carnet b')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-avatar">
                        <img class="w-75" src="/img/avatar_about_me.png" title="Luciano" alt="Yo">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
