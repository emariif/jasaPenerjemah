<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_job');
            $table->string('deskripsi');
            $table->string('jumlah_halaman');
            $table->date('tanggal_mulai')->nullable();
            $table->string('durasi');
            $table->string('total_harga');
            $table->bigInteger('kategori_bahasa_id');
            $table->bigInteger('users_id');
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
