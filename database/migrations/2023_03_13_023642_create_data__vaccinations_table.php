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
        Schema::create('data__vaccinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penduduk');
            $table->foreignId('id_master_vaksinasi');
            $table->foreignId('id_lokasi');
            $table->string('tgl_vaksinasi');
            $table->string('vaksin_ke');
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
        Schema::dropIfExists('data__vaccinations');
    }
};
