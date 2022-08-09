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
        Schema::create('custos', function (Blueprint $table) {
            $table->increments('id_cus');
            $table->integer('patrimonio')->unsigned();
            $table->integer('parcela_total');
            $table->integer('parcela_atual');
            $table->decimal('valor', $precision = 8, $scale = 2);
            $table->boolean('pago');

            $table->foreign('patrimonio')->references('id_pat')->on('patrimonios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custos');
    }
};
