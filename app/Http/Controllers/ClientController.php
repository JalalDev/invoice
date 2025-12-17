<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function search(Request $request){
        $clients = Client::where('nom', 'like', "%". $request->search ."%")
                        ->orWhere('email', 'like', "%". $request->search ."%")
                        ->orWhere('telephone', 'like', "%". $request->search ."%")
                        ->orWhere('adresse', 'like', "%". $request->search ."%")
                        ->paginate(10);
        return view('clients.index', compact('clients'));
    }

    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string',
            'adresse' => 'nullable|string',
            'email' => 'nullable|email',
            'tel' => 'nullable|string',
        ]);

        Client::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
