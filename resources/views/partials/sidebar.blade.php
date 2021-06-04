<!-- SIDEBAR -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item text-nowrap mt-3 mt-md-0 mb-0">
                        @guest
                            <a class="btn btn-default btn-rounded ml-1" href="{{ route('login') }}"><i
                                    class="fas fa-key text-warning"></i>
                                @lang('Log in')</a>
                        @else
                            <a class="btn btn-default btn-rounded ml-1" data-toggle="collapse" href="#collapse1">
                                <i class="fas fa-user"></i> @lang('hola') {{ Auth::user()->name }} !</a>
                        @endguest

                    </li>
                    <div id="collapse1" class="panel-collapse collapse">
                        <li class="nav-item">
                            @auth
                                <a class="text-danger nav-link" href=""
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt text-danger"></i> @lang('Log out')
                                </a>
                            @endauth
                        </li>
                    </div>

                    <li class="{{ setActive('home') }} nav-item nav-link mt-2 pt-3 border-top">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home  text-info"></i>
                            @lang('inicio')</a>
                    </li>

                    <li class="{{ setActive('centros.*') }} nav-item nav-link">
                        <a href="{{ route('centros.index') }}">
                            <i class="fas fa-globe  text-info"></i>
                            @lang('centros')
                        </a>
                    </li>

                    <li class="{{ setActive('about') }} nav-item nav-link">
                        <a href="{{ route('about') }}">
                            <i class="fas fa-user  text-info"></i>
                            @lang('sobre mi')
                        </a>
                    </li>

                    <li class="{{ setActive('contact') }} nav-item nav-link">
                        <a href="{{ route('contact') }}">
                            <i class="fas fa-envelope-open text-info"></i>
                            @lang('contacto')
                        </a>
                    </li>

                    <li class="{{ setActive('calendario') }} nav-item nav-link">
                        <a href="{{ asset('/evento/index/') }}">
                            <i class="fas fa-calendar-alt"></i>
                           Calendario de eventos
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-column mb-2">
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>

                <!-- FOOTER SITUADO AL BOT DEL SIDEBAR -->
                <footer class="bg-light text-center text-white position-absolute w-100 border-right">
                    <!-- Grid container -->
                    <div class="container pb-1">
                        <!-- Section: Social media -->
                        <section class="mb-0">
                            <!-- Facebook -->
                            <a class="btn text-white btn-floating p-1 mb-1 mx-1 m-md-1 col-1 col-md-3"
                                style="background-color: #3b5998" href="https://www.facebook.com/" role="button" target="_blank">
                                <i class="fab fa-facebook-f">
                                </i>
                            </a>
                            <!-- Twitter -->
                            <a class="btn text-white btn-floating p-1 mb-1 mx-1 m-md-1 col-1 col-md-3"
                                style="background-color: #55acee" href="https://twitter.com/" role="button" target="_blank">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <!-- Google -->
                            <a class="btn text-white btn-floating p-1 mb-1 mx-1 m-md-1 col-1 col-md-3"
                                style="background-color: #dd4b39" href="https://mail.google.com/" role="button" target="_blank">
                                <i class="fab fa-google">
                                </i>
                            </a>
                            <!-- Instagram -->
                            <a class="btn text-white btn-floating p-1 mb-1 mx-1 m-md-1 col-1 col-md-3"
                                style="background-color: #ac2bac" href="https://www.instagram.com/" role="button" target="_blank">
                                <i class="fab fa-instagram">
                                </i>
                            </a>
                            <!-- Linkedin -->
                            <a class="btn text-white btn-floating p-1 mb-1 mx-1 m-md-1 col-1 col-md-3"
                                style="background-color: #0082ca" href="https://es.linkedin.com/" role="button" target="_blank">
                                <i class="fab fa-linkedin-in">
                                </i>
                            </a>
                            <!-- Github -->
                            <a class="btn text-white btn-floating p-1 mb-1 mx-1 m-md-1 col-1 col-md-3"
                                style="background-color: #333333" href="https://github.com/Arlensh/Luevalua-laravel"
                                role="button" target="_blank">
                                <i class="fab fa-github">
                                </i>
                            </a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                    <!-- Grid container -->
                    <!-- Copyright -->
                    <div class="text-center p-1 fixed-bot" style="background-color: rgba(0, 0, 0, 0.712)">
                        © 2021 Copyright:
                        <a class="text-white-50" href="/">Luevalua
                        </a>
                    </div>
                    <!-- Copyright -->
                </footer>
            </div>
        </nav>
    </div>
</div>
<!-- !SIDEBAR -->
