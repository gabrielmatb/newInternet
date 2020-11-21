<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Compra;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\HomeController;

class ComprasController extends Controller
{
    public function index()
    {
        $compras = Compra::all();

        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        $produtos = Produto::all();
        
        $clientes = Cliente::all();

        return view('compras.create', compact('produtos'), compact('clientes'));
    }

    public function store(Request $request)
    {
        $produto = Produto::findOrFail($request->idProduto);

        if(($produto->quantidade) >= $request->quantidade)
        {
            Compra::create([
                'idCliente' => $request->idCliente,
                'idProduto' => $request->idProduto,
                'quantidade' => $request->quantidade,
            ]);
            $produto->quantidade -= $request->quantidade;
            /*$this->Produto::updateCompras($produto);*/
            app('App\Http\Controllers\ProdutosController')->updateCompras($produto);
            
            $compras = Compra::all();
            return view('compras.index', compact('compras'));
        }
        else return view('homeError');
    }
}
