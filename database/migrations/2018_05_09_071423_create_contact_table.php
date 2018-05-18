<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');          
            $table->string('cif', 15); 
            $table->string('razon_social', 100);
            $table->string('persona_contacto', 50);
            $table->string('email', 100);
            $table->string('telefono', 15);
            $table->string('direccion', 100);        
            $table->string('poblacion', 50);     
            $table->string('codigo_postal', 11);    
            $table->boolean('solicita_comercial');
            $table->boolean('autoriza_email');
            $table->ipAddress('ip');
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
        Schema::dropIfExists('contacts');
    }
}
