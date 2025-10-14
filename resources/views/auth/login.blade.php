@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="logo-container">
            <img src="{{ asset('images/unab.png') }}" alt="Logo UNAB">
            <h4 class="login-title">Sistema de Gestión Universitaria</h4>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Iniciar Sesión</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Recordar mis datos</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary px-4">Ingresar</button>
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="mt-3">Universidad Autónoma de Bucaramanga - UNAB © 2025</footer>
            </div>
        </div>
    </div>
@endsection
