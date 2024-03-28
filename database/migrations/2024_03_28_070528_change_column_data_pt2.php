<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('data_perguruan_tinggi', function (Blueprint $table) {
            //
            $table->string('nama_prodi', 200)->change();
            $table->string('image_pt', 200)->change();
            $table->string('fasilitas_image', 200)->change();
            $table->string('sk_pendirian', 200)->change();
            $table->string('Jenis_pt', 200)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_perguruan_tinggi', function (Blueprint $table) {
            //
        });
    }
};
