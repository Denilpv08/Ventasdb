<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client = Client::all();
        return view('clients.index', compact('client'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->post('name');
        $client->last_name = $request->post('last_name');
        $client->phone = $request->post('phone');
        $client->email = $request->post('email');
        $client->save();
        return redirect()->route('clients.index')->with('success', 'Successfully added');
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.delete', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->post('name');
        $client->last_name = $request->post('last_name');
        $client->phone = $request->post('phone');
        $client->email = $request->post('email');
        $client->update();
        return redirect()->route('clients.index')->with('success', 'Successfully updated');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Successfully deleted');
    }
}
