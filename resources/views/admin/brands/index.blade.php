@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">List of Brands</h3>

            <a href="{{ route('admin.brands.create') }}" class="btn btn-success mb-3">
                Add New Brand
            </a>

            <div class="row">
                @foreach ($brands as $brand)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5>{{ $brand->name }}</h5>
                                <small class="text-muted">Created: {{ $brand->created_at->format('Y-m-d') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $brands->links() }}
        </div>
    </div>
@endsection
