<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecadusuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nmusuario', 100);
            $table->date('dtnasc');          
            $table->string('nucpf', 20);
            $table->string('nurg', 15);
            $table->string('deendereco', 50);
            $table->string('nuendereco', 10);
            $table->string('debairro', 20);
            $table->string('deestado', 40);
            $table->string('decidade', 30);
            $table->string('nucep', 10);
            $table->string('nmlogin', 10)->unique();
            $table->string('deemail')->unique();
            $table->string('desenha');
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
        Schema::dropIfExists('ecadusuarios');
    }
}
