@extends('layouts.form')

@section('title', 'Inicio de sesión')
@section('title', 'Ingresa tus datos para iniciar sesión.')

@section('content')
    <div class="container pb-5 mt--8">
        <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="border-0 shadow card bg-secondary">
            <div class="card-body px-lg-5 py-lg-5">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3 form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password" name="password" required autocomplete="current-password">
                    </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input name="remember" class="custom-control-input" id=" remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for=" remember">
                    <span class="text-muted">Recordar sesión</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="my-4 btn btn-primary">Ingresar</button>
                </div>
                </form>
            </div>
            </div>
            <div class="mt-3 row">
            <div class="col-6">
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>¿Olvidaste tu contraseña?</small>
                </a>
            </div>
            <div class="text-right col-6">
                <a href="{{ route('register') }}" class="text-light">
                    <small>¿Aún no te has registrado?</small>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
