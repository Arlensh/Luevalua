@csrf
<label for="">
    Titulo del proyecto
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label for="">
    URL del proyecto
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label for="">
    Descripción del proyecto
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>
