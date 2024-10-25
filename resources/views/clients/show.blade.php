@extends('layouts.app')

@section('title', 'View Client')

@section('content')
    <div class="container mt-5">
        <h1>{{ $client->name }}</h1>
        <p><strong>Email:</strong> {{ $client->email }}</p>
        <p><strong>Cell:</strong> {{ $client->cel }}</p>
        <p><strong>Address:</strong> {{ $client->address }}</p>
        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
