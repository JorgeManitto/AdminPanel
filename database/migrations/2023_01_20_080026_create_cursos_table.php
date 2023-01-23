<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('titulo')->nullable();
            $table->string('disertante')->nullable();
            $table->string('duracion')->nullable();
            $table->string('url_info')->nullable();
            $table->string('valor_ars')->nullable();
            $table->string('valor_usd')->nullable();
            $table->string('estado')->nullable();

            $table->string('temario')->nullable();

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
        Schema::dropIfExists('cursos');
    }
};
