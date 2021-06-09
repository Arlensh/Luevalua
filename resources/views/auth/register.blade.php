@extends('layout')


@section('title', 'Registro')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
        <h1 class="h2">
            @lang('registro')
        </h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">@lang('registro')</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">@lang('nombre')</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-right">@lang('password')</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="centro" class="col-md-3 col-form-label text-md-right">@lang('Centros')</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="centro" id="centro">
                                        <option value="">@lang('eligetucentro')</option>
                                        @foreach ($centros as $centro)
                                            <option class="d-flex justify-content-between align-items-center"
                                                value="{{ $centro->centro }}">
                                                {{-- ucfirst(strtolower($centro->denominacion_especifica)) --}}
                                                {{ $centro->denominacion_especifica }} @lang('from') {{ $centro->localidad}}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{ $centros->links('pagination::bootstrap-4') }}

                                    @error('centro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- <span class="mb-5">
                                        {{ $centros->links('pagination::bootstrap-4') }}
                                    </span> --}}
                                </div>
                            </div>

                            <div class="form-group row d-none">
                                <label for="role" class="col-md-3 col-form-label text-md-right">@lang('role')</label>

                                <div class="col-md-8">
                                    <input id="role" type="text" class="form-control @error('role') is-invalid @enderror"
                                        name="role" value="2" required autocomplete="role" autofocus>

                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('registro')
                                    </button>
                                    <a class="" href="{{ route('login') }}">@lang('Log in')</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
