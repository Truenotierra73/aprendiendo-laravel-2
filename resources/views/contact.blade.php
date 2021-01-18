@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 my-3 mx-auto">
                <form class="bg-white shadow rounded py-3 px-3" method="POST" action="{{ route('contact.store') }}">
                    <h1 class="text-center">@lang('Contact')</h1>
                    @csrf
                    <div class="form-group">
                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                            placeholder="Nombre ..." value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="text"
                            placeholder="Email ..." value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control @error('subject') is-invalid @enderror" name="subject" type="text"
                            placeholder="Asunto ..." value="{{ old('subject') }}">
                        @error('subject')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error('content') is-invalid @enderror" style="resize: none"
                            name="content" cols="30" rows="10" placeholder="Mensaje ...">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
