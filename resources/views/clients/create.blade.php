@extends('layouts.app')

@section('title', 'Create Client')

@section('content')
    <div class="container mt-5">
        <h1>Create Client</h1>
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="cel" class="form-label">Cell:</label>
                <input type="text" class="form-control" name="cel" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" name="address" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
@endsection
