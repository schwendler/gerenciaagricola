<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_semente', function (Blueprint $table) {
            $table->increments('id');   //código identificador
            $table->string('tipo');   //título da mensagem
            $table->string('fabricante');    //texto da mensagem
            $table->string('nome');    //autor da mensagem
            
        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cadastro_semente', function (Blueprint $table) {
            //
        });
    }
}
