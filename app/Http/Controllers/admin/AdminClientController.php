<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'required|image',
        ]);

        $logo = $request->file('logo')
            ->store('clients', 'public');

        Client::create([
            'name' => $request->name,
            'logo' => $logo,
        ]);

        return redirect('/admin/clients')
            ->with('success', 'Client created successfully');
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = [
            'name' => $request->name,
        ];

        if ($request->hasFile('logo')) {

            $logo = $request->file('logo')
                ->store('clients', 'public');

            $data['logo'] = $logo;
        }

        $client->update($data);

        return redirect('/admin/clients')
            ->with('success', 'Client updated successfully');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return back()
            ->with('success', 'Client deleted successfully');
    }
}
