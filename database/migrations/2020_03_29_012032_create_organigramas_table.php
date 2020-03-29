<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganigramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organigramas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedbigInteger('area_id');
            $table->text('puesto');
            $table->text('integrante');
            $table->enum('genero', ['H', 'M']);

            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organigramas');
    }
}
