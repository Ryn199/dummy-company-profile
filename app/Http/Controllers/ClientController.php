<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(6);

        return view('clients.index', compact('clients'));
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);

        $latestClients = Client::latest()
            ->where('id', '!=', $client->id)
            ->take(5)
            ->get();

        return view('clients.show', compact(
            'client',
            'latestClients'
        ));
    }
}
