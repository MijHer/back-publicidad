<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_persona', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("empresa_id")->unsigned();
            $table->bigInteger("persona_id")->unsigned();

            $table->foreign("empresa_id")->references("id")->on("empresas");
            $table->foreign("persona_id")->references("id")->on("personas");

            $table->string("cargo")->nullable();
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
        Schema::dropIfExists('empresa_persona');
    }
}
