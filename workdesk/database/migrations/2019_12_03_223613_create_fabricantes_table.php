<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabricantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cnpj', 14);
            $table->string('razao_social', 50);
            $table->string('nome_fantasia', 50);
            $table->string('logradouro', 60);
            $table->string('numero', 15);
            $table->string('cidade', 25);
            $table->string('estado', 2);
            $table->string('cep', 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabricantes');
    }
}
