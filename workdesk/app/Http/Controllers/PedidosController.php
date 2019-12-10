<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Pedido;

class PedidosController extends Controller
{
    // esta função mostra a página de pedidos, e nessa página precisa mostrar a tabela pedidos pegando todos os registros do banco de dados
    public function index(){
        $pedidos = Pedido::paginate(5);
        return view('pedidos.index',['pedidos' => $pedidos]);
    }

    public function create(){
        return view('pedidos.novoPedido');
    }


    public function store(Request $request){
        $request->validate([
            'dataPedido' => 'date',
            'idCliente' => 'required|max:11',
            'idFornecedor' => 'required|max:11',
            'idUsuario' => 'required|max:11',
            'valorTotal' => 'required|max:8',
        ]);
        $pedidos = Pedido::create([
            'dataPedido' => $request->input('dataPedido'),
            'idCliente' => $request->input('idCliente'),
            'idFornecedor' => $request->input('idFornecedor'),
            'idUsuario' => $request->input('idUsuario'),
            'valorTotal' => $request->input('valorTotal'),
        ]); 
        return redirect('/pedidos/novoPedido');
    }


    public function ver(){
        return view('pedidos.verPedido');
    }

}
