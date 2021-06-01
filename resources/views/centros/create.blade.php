@extends('layout')

@section('title', 'Comentario')

@section('content')
    <div class="conainer">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
            <h1 class="h2">@lang('comentario')</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto mt-lg-5">
                <form action="{{ route('centros.store', $centro) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="description">@lang('titulo')</label>
                        <input id="title"
                            class="form-control bg-light shadow-sm"
                            type="text" name="title" placeholder=@lang('titulo')
                            value="{{ old('title') }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">@lang('descripcion')</label>
                        <input id="content"
                            class="form-control bg-light shadow-sm py-3 @error('content') is-invalid @else border-0 @enderror"
                            type="text" name="description" id="description" placeholder=@lang('descripcion')
                            value="{{ old('description') }}">
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>

                    <label class="d-none" for="">
                        @lang('user')
                        <input type="text" name="id_user" value="{{ Auth::user()->name }}">
                    </label>
                    <label class="d-none" for="">
                        @lang('centro')
                        <input type="text" name="id_centro" value="{{$centro->codigo}}">
                    </label>
                    <button class="btn btn-primary btn-lg btn-block">@lang('enviar')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
