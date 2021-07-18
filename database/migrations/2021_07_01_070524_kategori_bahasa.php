<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KategoriBahasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kategori_bahasa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori_bahasa');
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('kategori_bahasa_id')
                  ->references('id')
                  ->on('jobs')
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
