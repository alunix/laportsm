<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->string('judul_laporan', 256);
            $table->string('detail_laporan');
            $table->string('slug', 100);
            $table->string('tempat_kejadian'); //Tempat Kejadian Laporan (Alamat)
            $table->float('lat'); //Koordinat Tempat Kejadian Laporan (Alamat)
            $table->float('lng'); //Koordinat Tempat Kejadian Laporan (Alamat)
            $table->string('gambar_laporan');
            $table->integer('pembuat_laporan');
            $table->boolean('status_laporan');
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
        Schema::dropIfExists('laporans');
    }
}
