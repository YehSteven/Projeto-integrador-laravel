<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_Item extends Model
{
    protected $table = "pedido_item";
    protected $primaryKey = "id";
    protected $fillable = [
        "idPedido", "idProduto", "precoUnitario", "quantidadeProduto", "valorTotal"
    ];

}

