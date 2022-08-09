<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->increments('id_for');
            $table->boolean('ativo');
            $table->string('nome', 45);
            $table->string('razao', 45);
            $table->string('cnpj', 45);
            $table->string('endereco', 45);
            $table->string('cidade', 45);
            $table->integer('uf')->unsigned();
            $table->string('contato', 45);
            $table->integer('cep');
            $table->string('email', 45);
            $table->string('telefone', 45);

            $table->foreign('uf')->references('id_uf')->on('ufs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedors');
    }
};
