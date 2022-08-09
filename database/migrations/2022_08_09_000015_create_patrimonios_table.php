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
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->increments('id_pat');
            $table->boolean('ativo');
            $table->integer('categoria')->unsigned();
            $table->string('descricao', 45);
            $table->date('data');
            $table->bigInteger('fornecedor');
            $table->decimal('valor', $precision = 8, $scale = 2);
            $table->bigInteger('parcelas');
            $table->date('baixa');
            $table->string('motivo', 45);

            $table->foreign('categoria')->references('id_cat')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrimonios');
    }
};
