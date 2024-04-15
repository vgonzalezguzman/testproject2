<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curs', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 150);
            $table->enum('Etapa', ['ESO', 'BTX', 'CF']);
            $table->string('Descripcio', 1000);
            $table->boolean('Actiu')->default(true);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('curs');
    }
}

