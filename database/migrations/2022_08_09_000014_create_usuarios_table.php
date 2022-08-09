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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('login', 45)->primary();
            $table->string('senha', 45);
            $table->string('nome', 45);
            $table->string('skype', 45);
            $table->string('email', 45);
            $table->string('telefone', 45);
            $table->integer('filial');

            $table->foreign('filial')->references('id_filial')->on('filiais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
