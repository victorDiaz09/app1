{{ csrf_field() }}

<div class="form-group">
    <label for="title">Titulo del proyecto</label>
<input class="form-control border-0 bg-light shadow-sm" type="text" name="title" value="{{ old('title', $project->title) }}">
</div>
<br>
<div class="form-group">
<label for="url">URL del proyecto</label>
<input class="form-control border-0 bg-light shadow-sm" type="text" name="url" value="{{ old('url', $project->url) }}">
</div>
<br>
<div class="form-group">
    <label for="description">Descripcion del proyecto</label>
<textarea class="form-control border-0 bg-light shadow-sm" name="description">{{ old('description', $project->description) }}</textarea>
</div>
<br>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-danger btn-lg btn-block text-black" href="{{ route('projects.index') }}">Cancelar</a>
