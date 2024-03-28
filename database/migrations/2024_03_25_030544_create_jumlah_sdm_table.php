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
        Schema::create('jumlah_sdm', function (Blueprint $table) {
            $table->integer('id_sumber_daya');
            $table->integer('id_prodi');
            $table->integer('jumlah_mahasiswa');
            $table->integer('Jumlah_dosen');
            $table->integer('periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jumlah_sdm');
    }
};
