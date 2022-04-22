<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilsTable extends Migration
{
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_kode');
            $table->string('hasil_nama_pengguna');
            $table->string('hasil_total_nilai');
            $table->dateTime('hasil_waktu');
            $table->string('keterangan');

            $table->unsignedBigInteger('login_id')->nullable()->default(null);
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil');
    }
}
