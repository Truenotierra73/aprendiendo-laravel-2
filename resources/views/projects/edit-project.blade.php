@extends('app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 my-3 mx-auto">
                <form class="bg-white shadow rounded py-3 px-3" method="POST"
                    action="{{ route('projects.update', $project) }}">
                    @method('PUT')
                    <h1 class="text-center">Editar proyecto</h1>
                    @include('components.partials._form', ['btnText' => 'Guardar'])
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 my-3 mx-auto">
                <a class="btn btn-outline-secondary btn-block border-0" href="{{ route('projects.show', $project) }}">Volver</a>
            </div>
        </div>
    </section>
@endsection
