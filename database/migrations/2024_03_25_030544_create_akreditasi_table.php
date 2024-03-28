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
        Schema::create('akreditasi', function (Blueprint $table) {
            $table->string('prodi', 100);
            $table->string('jenjang', 100);
            $table->date('tanggal berlaku');
            $table->string('status', 100);
            $table->date('tanggal akhir');
            $table->string('peringkat', 1);
            $table->integer('sk_akreditasi');
            $table->integer('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akreditasi');
    }
};
