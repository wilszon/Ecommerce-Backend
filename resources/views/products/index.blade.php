<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tienda Tech - Landing Page</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #0d47a1;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
        }

        header p {
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
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

        .product-content h3 {
            margin-bottom: 0.5rem;
        }

        .product-content p {
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            background-color: #0d47a1;
            color: white;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: #08306b;
        }

        footer {
            text-align: center;
            padding: 2rem 1rem;
            color: #777;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tech Store</h1>
        <p>Los mejores gadgets al mejor precio</p>
    </header>

    <section class="container">
        <!-- Producto 1: Celular -->
        <div class="product">
            <img src="https://co.tiendasishop.com/cdn/shop/files/IMG-14858861_a9fd91d6-37c3-45a7-8f67-6e3761344bb1.jpg?v=1740440163&width=823" alt="Celular">
            <div class="product-content">
                <h3>iPhone 16 256 GB</h3>
                <p>Pantalla OLED, 256GB, Cámara 120MP. El mejor rendimiento para tu día.</p>
                <a href="/products/iPhone 16 256 GB/Smartphone" class="btn">Comprar</a>
            </div>
        </div>

        <div class="product">
            <img src="https://carulla.vtexassets.com/arquivos/ids/17534442/audifonos-inalambricos-para-iphone-airpods-pro-3-generacion.jpg?v=638616720659630000" alt="Audífonos">
            <div class="product-content">
                <h3>Headphones Wireless</h3>
                <p>Cancelación de ruido, batería de 30h y sonido envolvente premium.</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>

        <!-- Producto 3: Smartwatch -->
        <div class="product">
            <img src="https://smselectronic.com/wp-content/uploads/2024/02/fit-3-negro-samsung.png" alt="Smartwatch">
            <div class="product-content">
                <h3>Smartwatch Fit</h3>
                <p>Controla tu salud, recibe notificaciones y personalízalo a tu estilo.</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>

        <!-- Producto 4: Laptop -->
        <div class="product">
            <img src="https://reset.net.co/wp-content/uploads/2021/10/ACER-NITRO5-10300H-GTX1650.webp" alt="Laptop">
            <div class="product-content">
                <h3>Acer Nitro 5</h3>
                <p>Ligera, potente y con batería de larga duración. Ideal para trabajar o estudiar.</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Tech Store. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
