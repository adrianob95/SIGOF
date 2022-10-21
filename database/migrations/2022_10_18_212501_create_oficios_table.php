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
        Schema::create('oficios', function (Blueprint $table) {
            $table->id(); 
                $table->string('numeracao');
                $table->string('ano');
                $table->string('data');
                $table->string('cidade');
                $table->string('destinatario');
                $table->string('situacao');
                $table->string('assunto');                 
                
                $table->text('conteudo');
   
                $table->string('tratamento');
                $table->string('cargodestino');
                $table->string('localdestino');         
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
        Schema::dropIfExists('oficios');
    }
};
