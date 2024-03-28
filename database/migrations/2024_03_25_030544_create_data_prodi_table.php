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
        Schema::create('data_prodi', function (Blueprint $table) {
            $table->integer('id_Prodi')->primary();
            $table->char('nama_Prodi', 200);
            $table->string('Wilayah', 100);
            $table->string('nama_Kaprodi', 100);
            $table->date('tgl_sk_Prodi');
            $table->date('tgl_penetapan_akreditasi');
            $table->integer('Jumlah_Dosen');
            $table->integer('Jumlah_Mahasiswa');
            $table->string('image_Prodi', 100);
            $table->string('image_fasilitas', 100);
            $table->integer('sk_prodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_prodi');
    }
};
