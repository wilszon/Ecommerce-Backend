@extends('layouts.app')

@section('content')

    {{-- Header de la página --}}
    <header>
        <h1>Tech Store</h1>
        <p>Los mejores gadgets al mejor precio</p>
    </header>

    {{-- Contenedor de productos --}}
    <section class="container">

        @foreach ($products as $product)
            <div class="product">

                {{-- Imagen del producto (fija por ahora) --}}
                <img
                    src="https://reset.net.co/wp-content/uploads/2021/10/ACER-NITRO5-10300H-GTX1650.webp"
                    alt="{{ $product->name }}"
                >

                <div class="product-content">

                    <h3>{{ $product->name }}</h3>

                    <p>{{ $product->description }}</p>

                    <p><strong>Precio:</strong>
                        ${{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    <p>
                        <strong>Categoría:</strong>
                        {{ $product->category ? $product->category->name : 'Sin categoría' }}
                    </p>

                    <p>
                        <strong>Brand:</strong>
                        {{ $product->brand ? $product->brand->name : 'Sin marca' }}
                    </p>

                    <a
                        href="{{ route('product.detail', [$product->id, $product->category?->name]) }}"
                        class="btn"
                    >
                        Comprar
                    </a>

                </div>
            </div>
        @endforeach

    </section>

@endsection



@section('css')
<style>

    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Encabezado */
    header {
        background-color: #0d47a1;
        color: white;
        padding: 2rem 1rem;
        text-align: center;
    }

    /* Grid de productos */
    .container {
        max-width: 1200px;
        margin: 2rem auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    /* Tarjeta del producto */
    .product {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform .3s ease;
    }

    .product:hover {
        transform: translateY(-5px);
    }

    .product img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .product-content {
        padding: 1rem;
    }

    /* Botón */
    .btn {
        display: inline-block;
        background-color: #0d47a1;
        color: white;
        padding: 0.6rem 1.2rem;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #08306b;
    }

</style>
@endsection
