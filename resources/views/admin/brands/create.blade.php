@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Add New Brand</h3>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.brands.store') }}" method="POST">
                @csrf

                <div class="input-group input-group-outline mb-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
