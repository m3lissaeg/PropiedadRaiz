<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');  // FK un usuario tien un perfil, un perfil corresponde a un usuario.
            $table->string('propertyDescription');  // descripcion propiedad.
            $table->string('projectName');          //Proyecto Inmobiliario.
            $table->string('address');              // ubicacion del proyecto
            $table->decimal('comision');    // valor del abono de la comision 
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
        Schema::dropIfExists('payments');
    }
}
