@extends('app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
                <h1 class="text-primary text-center">Desarrollo web y de aplicaciones móviles</h1>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <a class="btn btn-primary btn-lg btn-block" href="{{ route('projects.index') }}">Proyectos</a>
                <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('contact') }}">Contáctame</a>
            </div>
        </div>
    </section>

    {{-- @auth
    {{ auth()->user()->name }}
    @endauth --}}
@endsection
