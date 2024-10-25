<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Display a listing of the clients
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // Show the form for creating a new client
    public function create()
    {
        return view('clients.create');
    }

    // Store a newly created client in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'cel' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        Client::create($validatedData);
        return redirect()->route('clients.index');
    }

    // Display the specified client
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    // Show the form for editing the specified client
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    // Update the specified client in storage
    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'cel' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        $client->update($validatedData);
        return redirect()->route('clients.index');
    }

    // Remove the specified client from storage
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
