@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">List of Categories</h3>

            <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">
                Add New Category
            </a>

            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5>{{ $category->name }}</h5>
                                <small class="text-muted">
                                    Created: {{ $category->created_at->format('Y-m-d') }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $categories->links() }}
        </div>
    </div>
@endsection
