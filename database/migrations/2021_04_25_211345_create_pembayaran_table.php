<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pembayaran');
            $table->string('status_pembayaran');
            $table->bigInteger('konfirmasi_pembayaran_id')->unsigned();;
            $table->bigInteger('jenis_pembayaran_id')->unsigned();;

        });

        Schema::create('jenis_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pembayaran');
        });

        Schema::create('konfirmasi_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_pembayaran');
        });

        Schema::table('pembayaran', function (Blueprint $table) {
            // foreign key review
            $table->foreign('konfirmasi_pembayaran_id')
            ->references('id')->on('konfirmasi_pembayaran')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            // foreign key review
            $table->foreign('jenis_pembayaran_id')
            ->references('id')->on('jenis_pembayaran')
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
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('konfirmasi_pembayaran');

    }
}
