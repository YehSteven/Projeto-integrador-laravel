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
    
}
