<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Cliente::create([
            'nome' => $request->nome,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', ['cliente' => $cliente]);
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update([
            'nome' => $request->nome,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function delete($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.delete', ['cliente' => $cliente]);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
}
