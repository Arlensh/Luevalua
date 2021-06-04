<ul>
    @forelse($comentarios as $comentario)
        @if ($comentario->id_centro===$centro->centro)
        <a class="" data-toggle="collapse" href="#respuesta" role="button" aria-expanded="false" aria-controls="respuesta">
            @lang('respondercomentarios')
          </a>
            <li class="list-group-item border-0 mb-3-shadow-sm d-flex justify-content-between align-items-center mb-1 mr-md-5">
                    <span class="text-secondary mr-5">
                        <span class="font-weight-bold">{{ $comentario->title }}</span>
                        <br>
                        @lang('autor') {{ $comentario->id_user}} <br>
                        {{ $comentario->description }}
                    </span>
                    <span class="text-black-50">{{ $comentario->created_at->diffForHumans() }}</span>
                    <form action={{ route('centros.destroy',$centro,$comentario) }} method="POST">
                        @csrf @method('DELETE')
                        <button type="buttont" class="btn text-danger"><i class="fas fa-flag"></i></button>
                    </form>
            </li>
            <div id="respuesta" class="collapse">
                <input id="content"
                    class="bg-light shadow-sm py-2 mx-5 @error('content') is-invalid @else border-0 @enderror"
                    type="text" name="respuesta" id="respuesta" placeholder=@lang('responder')
                    value="{{ old('respuesta') }}">
                    @error('respuesta')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                 <a href=""><i class="fas fa-envelope"></i></a>
            </div>
        @endif
        @empty
        <li class="list-group-item border-0 mb-3-shadow-sm ">
            <strong>@lang('nocomentarios')</strong>
        </li>
    @endforelse
</ul>
