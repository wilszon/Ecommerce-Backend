@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>List of Products</h3>
            <a href="{{ route('admin.products.create') }}" type="button" class="btn btn-success">Add New Product</a>
            <table class="table align-item-center mb-0">
                <thead>
                    <th class="text-center font-weight-bolder">ID</th>
                    <th class="text-center font-weight-bolder">Name</th>
                    <th class="text-center font-weight-bolder">Price</th>
                    <th class="text-center font-weight-bolder">Category</th>
                    <th class="text-center font-weight-bolder">Brand</th>
                    <th class="text-center font-weight-bolder">Created At</th>
                    <th class="text-center font-weight-bolder">Updated At</th>
                    <th class="text-center font-weight-bolder"></th>

                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="align-middle text-center">{{ $product->id }}</td>
                            <td class="align-middle text-center">{{ $product->name }}</td>
                            <td class="align-middle text-center">{{ $product->price }}</td>
                            <td class="align-middle text-center">{{ $product->category_id }}</td>
                            <td class="align-middle text-center">{{ $product->brand_id }}</td>
                            <td class="align-middle text-center">{{ $product->created_at }}</td>
                            <td class="align-middle text-center">{{ $product->updated_at }}</td>
                            <td>
                                <form action="{{ route('admin.products.delete', $product->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Seguro que deseas eliminar este producto?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $products->links() }}
        </div>
    </div>
@endsection
