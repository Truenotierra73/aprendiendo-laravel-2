@extends('app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 my-3 mx-auto">
                <div class="bg-white p-5 shadow-rounded">
                    <h1>{{ $project->title }}</h1>
                    <p class="text-secondary">{{ $project->description }}</p>
                    <p><small>{{ $project->created_at->diffForHumans() }}</small></p>
                    <div class="d-flex justify-content-between align-items-center">
                        @auth
                            <div class="ml-auto">
                                <a class="btn btn-primary rounded-pill" href="{{ route('projects.edit', $project) }}">Editar</a>
                                <a class="btn btn-outline-danger rounded-pill" href="#"
                                    onclick="document.getElementById('delete-project').submit()">Eliminar</a>
                            </div>
                            <form id="delete-project" class="d-none" method="POST"
                                action="{{ route('projects.destroy', $project) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 my-3 mx-auto">
                <a class="btn btn-outline-secondary btn-block border-0" href="{{ route('projects.index') }}">Volver</a>
            </div>
        </div>
    </section>

@endsection
