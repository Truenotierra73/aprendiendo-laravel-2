@extends('app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0">@lang('Projects')</h1>
            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear proyecto</a>
            @endauth
        </div>
        <hr>
        <p class="lead text-secondary">
            Lista de proyectos realizados y/o en curso.
        </p>
        <ul class="list-group">
            @forelse ($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm"><a
                        class="text-secondary d-flex justify-content-between align-items-center"
                        href="{{ route('projects.show', $project) }}">
                        <span>
                            {{ $project->title }}
                        </span>
                        <span>
                            {{ $project->created_at->format('d/m/Y') }}
                        </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay proyectos para mostrar.</li>
            @endforelse
            <div class="mx-auto">
                {{ $projects->links() }}
            </div>
        </ul>
    </div>
@endsection
