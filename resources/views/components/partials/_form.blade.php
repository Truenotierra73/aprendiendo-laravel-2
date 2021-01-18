@csrf
<div class="form-group">
    <label for="title">Título del proyecto</label>
    <input id="title" class="form-control @error('title') is-invalid @enderror" name="title" type="text"
        value="{{ old('title', $project->title) }}">
    @include('components.partials.validation-errors', ['attr' => 'title'])
</div>
<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea id="description" class="form-control @error('description') is-invalid @enderror"
        name="description">{{ old('description', $project->description) }}</textarea>
    @include('components.partials.validation-errors', ['attr' => 'description'])
</div>
<button class="btn btn-primary btn-block">{{ $btnText }}</button>
