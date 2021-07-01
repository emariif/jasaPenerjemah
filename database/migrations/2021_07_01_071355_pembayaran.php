<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pembayaran');
            $table->string('status');
            $table->string('konfirmasi_pembayaran_id');
            $table->string('jenis_pembayaran_id');
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
        //
    }
}
