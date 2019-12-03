<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = "fabricantes";
    protected $primaryKey = "id";
    protected $fillable = [
        "cnpj", "razaoSocial", "nomeFantasia", "logradouro", "numero", "estado", "cidade", "cep"
    ];

}
