@extends('layout')

@section('title', 'Formulario del evento')

@section('content')

<div class="container">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
       <button type="button" class="close" data-dismiss="alert">×</button>
       <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
       </ul>
      </div>
     @endif
     @if ($message = Session::get('success'))
     <div class="alert alert-success alert-block">
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
            <textarea name="descripcion" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
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
        <input type="submit" class="btn btn-info" value="@lang('Save')">
      </form>
    </div>


    <!-- inicio de semana -->


  </div> <!-- /container -->

  @endsection
