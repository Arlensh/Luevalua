@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="conainer">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
            <h1 class="h2">@lang('contacto')</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto mt-lg-5">
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                    @csrf
                    <div class="form-group">
                        @lang('nombre') <input id="name"
                            class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            type="text" name="name" placeholder=@lang('nombre')
                            value="{{ Auth::user()->name ?? old('name') }}" @if (Auth::user()->name ?? '') readonly @endif>
                            {{-- value="{{ old('name') }}"> --}}
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('email')</label>
                        <input id="email"
                            class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            type="email" name="email" id="email" placeholder=@lang('email')
                            value="{{ Auth::user()->email ?? old('email') }}" @if (Auth::user()->email ?? '') readonly @endif>
                            {{-- value="{{ old('email') }}"> --}}
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">@lang('asunto')</label>
                        <input id="subject"
                            class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                            type="subject" name="subject" id="subject" placeholder=@lang('asunto')
                            value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">@lang('contenido')</label>
                        <input id="content"
                            class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                            type="content" name="content" id="content" placeholder=@lang('contenido')
                            value="{{ old('content') }}">
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">@lang('enviar')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
