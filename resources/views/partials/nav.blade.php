{{-- <nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('home')</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('about')</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">@lang('project')</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">@lang('contact')</a></li>
        @auth
            <li>
                <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
            </li>
        @else
            <li class="{{ setActive('login') }}"><a href="{{ route('login') }}">Login</a></li>
        @endauth
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form> --}}

<!-- NAVBAR -->
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    {{-- <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">Luevalua.com
    </a> --}}
    <a class="navbar-brand col-md-3 col-lg-2 p-0 m-0" href="/">
        <img class="p-0 m-0" src="../../img/Luevalua.png" alt="">
    </a>

    <li class="idioma dropdown d-md-none mt-0">
        <a class="dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
            {{-- {{ Config::get('languages')[App::getLocale()]['display'] }} --}}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                            class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                        {{ $language['display'] }}</a>
                @endif
            @endforeach
        </div>
    </li>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
        data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
    </button>
    <div class="w-100">
        <MARQUEE DIRECTION="right" BEHAVIOR=ALTERNATE WIDTH="98%" class="text-white mt-2">
            @lang('marquee')
        </MARQUEE>
    </div>
    <li class="dropdown d-none d-md-block mr-2">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
            {{ Config::get('languages')[App::getLocale()]['display'] }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                            class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                        {{ $language['display'] }}</a>
                @endif
            @endforeach
        </div>
    </li>
</nav>
<!-- !NAVBAR -->
