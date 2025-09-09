<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar Producto</title>
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

        .form-container {
            max-width: 600px;
            margin: 3rem auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 2rem;
        }

        form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 0.7rem;
            margin-bottom: 1.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        form textarea {
            resize: vertical;
        }

        .btn-submit {
            display: block;
            width: 100%;
            background-color: #0d47a1;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #08306b;
        }

        @media (max-width: 600px) {
            .form-container {
                margin: 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Agregar Nuevo Producto</h2>
        <form>
            <label for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" name="nombre" required />

            <label for="categoria">Categoria</label>
            <input type="text" id="categoria" name="categoria" required />

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" required />

            <label for="imagen">URL de la imagen</label>
            <input type="url" id="imagen" name="imagen" required />

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <button type="submit" class="btn-submit">Guardar Producto</button>
        </form>
    </div>

</body>

</html>
