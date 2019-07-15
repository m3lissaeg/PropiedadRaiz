<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            // Definicion de propiedad. 1 propiedad pertenece a un vendedor. 
            // pero un vendedor puede tener muchas propiedades.
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');  // FK un usuario tien un perfil, un perfil corresponde a un usuario.
            $table->string('propertyDescription');  // descripcion propiedad.
            $table->string('projectName');          //Proyecto Inmobiliario.
            $table->string('address');              // ubicacion del proyecto
            $table->decimal('priceProperty');    // precio propiedad
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
        Schema::dropIfExists('properties');
    }
}
