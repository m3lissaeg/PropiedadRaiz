<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // FK un usuario tien un perfil, un perfil corresponde a un usuario.
            $table->string('title')->nullable();//no requerido al momento de registro
            $table->text('description')->nullable();//no requerido al momento de registro
            $table->string('urlagency')->nullable();//no requerido al momento de registro
            $table->timestamps();

            $table->index('user_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
    
}
