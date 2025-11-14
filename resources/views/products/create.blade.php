@extends('admin.layouts.app')

@section('content')
    <div class="form-container">
        <h2>Add New Product</h2>
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <!-- Product Name -->
            <label for="ProductName">Product Name</label>
            @error('name')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            <input type="text" id="ProductName" name="name" value="{{ old('name') }}" />


            <!-- Description -->
            <label for="Description">Description</label>
            @error('description')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            <textarea id="Description" name="description" rows="4">{{ old('description') }}</textarea>


            <!-- Price -->
            <label for="Price">Price</label>
            @error('price')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            <input type="number" id="Price" name="price" value="{{ old('price') }}" step="0.01" />

            <!-- Category -->
            <label for="Category">Category</label>
            @error('category')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            <select class="form-select" id="Category" name="category">
                <option value="" selected disabled> ---- </option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

            <!-- Brand -->
            <label for="Brand">Brand</label>
            @error('brand')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            <select class="form-select" id="Brand" name="brand">
                <option value="" selected disabled> ---- </option>
                @foreach ($brands as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn-submit">Create Product</button>
        </form>
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
        }

        /* Centra el contenido mejor dentro del layout */
        .form-container {
            width: 90%;
            max-width: 650px;
            margin: 2rem auto;
            background-color: white;
            padding: 2.5rem;
            border-radius: 14px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            animation: fadeIn 0.3s ease;
        }

        /* Animación suave */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container h2 {
            text-align: center;
            color: #0d47a1;
            font-size: 1.9rem;
            margin-bottom: 2.5rem;
        }

        /* Espaciado uniforme entre elementos */
        form label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
            color: #333;
            font-size: 0.95rem;
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1.7rem;
            border: 1.5px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            background-color: #fafafa;
            transition: all 0.25s ease;
        }

        /* Efecto al seleccionar */
        form input:focus,
        form textarea:focus,
        form select:focus {
            border-color: #0d47a1;
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(13, 71, 161, 0.15);
        }

        form textarea {
            resize: vertical;
        }

        /* Botón */
        .btn-submit {
            width: 100%;
            background-color: #0d47a1;
            color: white;
            padding: 0.9rem;
            border: none;
            border-radius: 8px;
            font-size: 1.05rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.25s ease, transform 0.1s ease;
        }

        .btn-submit:hover {
            background-color: #08306b;
        }

        .btn-submit:active {
            transform: scale(0.98);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .form-container {
                width: 92%;
                padding: 1.8rem;
            }
        }
    </style>
@endsection
