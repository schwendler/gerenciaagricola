<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planejamento', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('previsao_ganhos');            //título da atividade
            $table->string('cad_semente_nome');      //descrição da atividade
            $table->dateTime('ano');    //agendado para
            $table->string('hectare_plantado');
            $table->string('previsao_gasto'); 
            $table->string('safra');
            
            $table->integer('')->unsigned(); //guarda o id de quem cadastra a ativ.
            $table->timestamps();               //registro created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('planejamento', function (Blueprint $table) {
            //
        });
    }
}
