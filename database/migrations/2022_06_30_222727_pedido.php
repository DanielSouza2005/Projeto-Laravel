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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
        });

        Schema::table('pedido', function(BluePrint $table){
            $table->foreign('id_cliente')->references('id')->on('cliente');
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
        Schema::dropIfExists('pedido');
    }
};
