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
        Schema::create('data_perguruan_tinggi', function (Blueprint $table) {
            $table->integer('id_pt');
            $table->string('Nama_pt', 200);
            $table->string('wilayah', 200);
            $table->string('statuta', 200);
            $table->string('pedoman_akademik', 200);
            $table->string('nama_Rektor', 50);
            $table->string('nama_warek_1', 50);
            $table->string('nama_warek_2', 50);
            $table->string('nama_warek_3', 50);
            $table->date('tgl_berdiri_pt');
            $table->date('tgl_penetapan_akre');
            $table->integer('id_prodi');
            $table->integer('nama_prodi');
            $table->integer('image_pt');
            $table->integer('fasilitas_image');
            $table->integer('sk_pendirian');
            $table->integer('Jenis_pt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_perguruan_tinggi');
    }
};
