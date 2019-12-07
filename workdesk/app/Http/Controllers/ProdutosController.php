<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Produto;

class ProdutosController extends Controller
{
    // esta função mostra a página de produtos, e nessa página precisa mostrar a tabela produtos pegando todos os registros do banco de dados
    public function index(){
        $produtos = Produto::paginate(5);
        return view('produtos.index',['produtos' => $produtos]);
    }

    // esta função apaga o produto no banco de dados
    public function excluir($id){
        $excluirPproduto = Produto::find($id);
        $excluirProduto->delete();
        return redirect('/produtos');
    }

    public function create(){
        return view('produtos.index');
    }

    public function store(Request $request){
        $request->validate([
            'nomeProduto' => 'required|max:50',
            'preco' => 'required|max:8',
        ]);
        $produto = Produto::create([
            'nomeProduto' => $request->input('nomeProduto'),
            'preco' => $request->input('preco'),
        ]); 
        return redirect('/produtos');
    }

}
