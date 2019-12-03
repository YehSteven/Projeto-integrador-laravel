<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    protected $table = "distribuidores";
    protected $primaryKey = "id";
    protected $fillable = [
        "cnpj", "razaoSocial", "nomeFantasia", "logradouro", "numero", "estado", "cidade", "cep"
    ];

}
