<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->text('desc');
            $table->double('preco',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php jr make:migration cria_tabela_produtosvenda --create produtosvenda  
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
