<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdkksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdkks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok',255);
            $table->string('alamat',255);
            $table->string('nama_pengecer',255);
            $table->char('luas_tanah');
            $table->integer('jumlah_pupuk');
            $table->string('waktu_penggunaan');
            $table->string('status');
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
        Schema::dropIfExists('rdkks');
    }
}
