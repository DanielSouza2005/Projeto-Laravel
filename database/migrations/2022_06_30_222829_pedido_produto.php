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
        //
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_produto');
            $table->integer('qtde', 11);
        });

        Schema::table('pedido_produto', function(BluePrint $table){
            $table->foreign('id_pedido')->references('id')->on('pedido');
            $table->foreign('id_produto')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('pedido_produto');
    }
};
