<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function(Blueprint $table){
        $table ->id();
        $table ->string('titulo');
        $table ->string('autor');
        $table ->string('editorial');
        $table ->date('fecha_de_publicacion');
        $table ->string('numero de paginas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropDatabaseIfExists('libro');
    }
}
