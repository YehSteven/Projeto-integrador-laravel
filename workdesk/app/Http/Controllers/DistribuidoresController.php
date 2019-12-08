<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Distribuidor;

class DistribuidoresController extends Controller
{
    // esta função mostra a página de distribuidores, e nessa página precisa mostrar a tabela distribuidores pegando todos os registros do banco de dados
    public function index(){
        $distribuidores = Distribuidor::paginate(5);
        return view('distribuidores.index',['distribuidores' => $distribuidores]);
    }

    // esta função apaga o distribuidor no banco de dados
    public function excluir($id){
        $excluirDistribuidor = Distribuidor::find($id);
        $excluirDistribuidor->delete();
        return redirect('/distribuidores');
    }
    
    public function create(){
        return view('distribuidores.index');
    }

    public function store(Request $request){
        
        $request->validate([
            'cnpj' => 'required|max:14',
            'razaoSocial' => 'required|max:50',
            'nomeFantasia' => 'required|max:50',
            'logradouro' => 'required|max:60',
            'numero' => 'required|max:15',
            'cidade' => 'required|max:25',
            'estado' => 'required|max:2',
            'cep' => 'required|max:8'
        ]);

        $distribuidor = Distribuidor::create([
            'cnpj' => $request->input('cnpj'),
            'razaoSocial' => $request->input('razaoSocial'),
            'nomeFantasia' => $request->input('nomeFantasia'),
            'logradouro' => $request->input('logradouro'),
            'numero' => $request->input('numero'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'cep' => $request->input('cep')
        ]);
            
        return redirect('/distribuidores');
    }

}
