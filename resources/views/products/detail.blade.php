@extends('layouts.app')

@section('content')
    <div class="detalle-container">
        <div class="detalle-img">
            <img src="https://co.tiendasishop.com/cdn/shop/files/IMG-14858861_a9fd91d6-37c3-45a7-8f67-6e3761344bb1.jpg?v=1740440163&width=823"
                alt="Smartphone Pro X" />
        </div>

        <div class="detalle-info">
            <h1>{{ $id }}</h1>
            <p class="precio">$899.00</p>
            <p><strong>Marca:</strong> Apple</p>
            <p><strong>Categoría:</strong> {{ $category }}</p>
            <p><strong>Descripción:</strong> El Smartphone iPhone cuenta con una pantalla OLED de última generación, 256GB
                de almacenamiento interno, cámara de 64MP y un rendimiento superior para tareas diarias, juegos y
                productividad. Ideal para quienes buscan calidad y velocidad en un solo dispositivo.</p>

            <a href="#" class="btn-comprar">Comprar Ahora</a>
            <a href="/products" class="btn-comprar">Regresar a la Lista de Productos</a>
        </div>
    </div>
@endsection

@section('css')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 2rem;
        }

        .detalle-container {
            max-width: 1000px;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .detalle-img {
            flex: 1 1 400px;
            max-height: 500px;
        }

        .detalle-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .detalle-info {
            flex: 1 1 500px;
            padding: 2rem;
        }

        .detalle-info h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #0d47a1;
        }

        .detalle-info p {
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .detalle-info .precio {
            font-size: 1.5rem;
            color: #e53935;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .detalle-info .btn-comprar {
            display: inline-block;
            background-color: #0d47a1;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .detalle-info .btn-comprar:hover {
            background-color: #08306b;
        }

        @media (max-width: 768px) {
            .detalle-container {
                flex-direction: column;
            }

            .detalle-img,
            .detalle-info {
                flex: 1 1 100%;
            }
        }
    </style>
@endsection

