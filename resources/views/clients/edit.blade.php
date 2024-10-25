@extends('layouts.app')

@section('title', 'Edit Client')

@section('content')
    <div class="container mt-5">
        <h1>Edit Client</h1>
        <form method="POST" action="{{ route('clients.update', $client->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $client->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $client->email }}" required>
            </div>
            <div class="mb-3">
                <label for="cel" class="form-label">Cell:</label>
                <input type="text" class="form-control" name="cel" value="{{ $client->cel }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" name="address" rows="3" required>{{ $client->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
@endsection
