@extends('layout')

@section('title', 'Editar | ' . $centro->denominacion_especifica)

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 my-3 border-bottom">
        <h1 class="h2">
            @lang('editatucentro')
        </h1>
    </div>
    @include('partials.validation-errors')

    <form action="{{ route('centro.update', $centro) }}" method="POST">
        @csrf @method('PATCH')
        <div class="form-group">
            <textarea name="content" rows="5" cols="40" class="form-control tinymce-editor" value={!! $centro->content !!}></textarea>
            </div>
            <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
            <script type="text/javascript">
                tinymce.init({
                    selector: 'textarea.tinymce-editor',
                    height: 400,
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

            <button type="submit" class="btn btn-primary">
                @lang('actualizar')
            </button>
        </form>
@endsection
