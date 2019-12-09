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

    public function novo(){
        return view('pedidos.novoPedido');
    }

    public function ver(){
        return view('pedidos.verPedido');
    }

}
