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
        Schema::create('struktural', function (Blueprint $table) {
            $table->string('id_struktural', 100);
            $table->string('Id_PT', 100);
            $table->string('nama_rektor', 100);
            $table->string('Sk_pimpinan', 100);
            $table->date('pimpinan1');
            $table->date('pimpinan2');
            $table->string('pimpinan3', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('struktural');
    }
};
