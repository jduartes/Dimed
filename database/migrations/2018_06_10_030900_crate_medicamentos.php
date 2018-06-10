<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateMedicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecadmedicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nmmedicamento', 50);
            $table->string('nmlaboratorio', 30);
            $table->string('nucodigobarras', 20);
            $table->date('dtvalidade');
            $table->integer('qtmedicamento');
            $table->text('deobservacao');
            $table->char('flbula')->nullable();
            $table->char('flcaixa')->nullable();
            $table->integer('usuarios_id')->references('ecadusuarios')->on('id');
            $table->date('dtcadastro');
            $table->text('deunidade');
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
        Schema::dropIfExists('ecadmedicamentos');
    }
}
