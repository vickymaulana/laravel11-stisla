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
        Schema::create('pedoman', function (Blueprint $table) {
            $table->integer('id_statuta');
            $table->string('id_pt', 250);
            $table->string('Bab');
            $table->string('Pasal');
            $table->date('tgl_penetapan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedoman');
    }
};
