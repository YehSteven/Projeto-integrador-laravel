<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = "fabricantes";
    protected $primaryKey = "id";
    protected $fillable = [
        "cnpj", "razao_social", "nome_fantasia", "logradouro", "numero", "estado", "cidade", "cep"
    ];

}
