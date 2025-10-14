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
                    <div class="card-header text-center">Registrarse</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input id="name" type="text" class="form-control" name="name"
                                    value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary px-4">Registrarse</button>
                                <a class="small" href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="mt-3">Universidad Autónoma de Bucaramanga - UNAB © 2025</footer>
            </div>
        </div>
    </div>
@endsection
