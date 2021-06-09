@extends('layout')

@section('title', 'Formulario del evento')

@section('content')

<div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger mt-3">
       <button type="button" class="close" data-dismiss="alert">×</button>
       <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
       </ul>
      </div>
     @endif
     @if ($message = Session::get('success'))
     <div class="alert alert-success alert-block mt-3">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
     </div>
     @endif
    <div class="col-md-12">
        <a class="btn py-1 px-2 mt-2" href="{{ asset('/evento/index') }}"><i class="fas fa-arrow-left"></i></a>
      <form action="{{ asset('/evento/create/') }}" method="post">
        @csrf
        <div class="form-group">
          <label>@lang('titulo')</label>
          <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label>@lang('tipo')</label>
            <select class="form-control" aria-label="tipo" name="tipo">
                <option value="3">@lang('Choose')</option>
                <option value="1">@lang('evento')</option>
                <option value="2">@lang('noticia')</option>
                <option value="3">@lang('otros')</option>
              </select>
        </div>
        <div class="form-group">
            <textarea name="descripcion" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
            </div>
            <div class="form-group d-none">
                <label>@lang('centro')</label>
                <input type="text" class="form-control" name="centro" value={{auth()->user()->centro}}>
            </div>
            <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
            <script type="text/javascript">
                tinymce.init({
                    selector: 'textarea.tinymce-editor',
                    height: 300,
                    menubar: true,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: 'undo redo | formatselect | ' +
                        'bold italic backcolor | alignleft aligncenter ' +
                        'alignright alignjustify | bullist numlist outdent indent | ' +
                        'removeformat | help',
                    content_css: '//www.tiny.cloud/css/codepen.min.css'
                });
            </script>
        <div class="form-group">
          <label>@lang('Choose date')</label>
          <input type="date" class="form-control" name="fecha">
        </div>
        <br>
        <input type="submit" class="btn btn-info mb-3" value="@lang('Save')">
      </form>
    </div>
    <!-- inicio de semana -->
  </div> <!-- /container -->
  @endsection
