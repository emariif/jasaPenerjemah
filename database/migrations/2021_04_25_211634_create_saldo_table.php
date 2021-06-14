<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('saldo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pembayaran_id')->unsigned();
            $table->bigInteger('konfirmasi_job_id')->unsigned();

        });

        // foreign key
        Schema::table('saldo', function (Blueprint $table) {
            // foreign key pembayaran
            $table->foreign('pembayaran_id')
            ->references('id')->on('pembayaran')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            // foreign key jobs
            $table->foreign('konfirmasi_job_id')
            ->references('id')->on('konfirmasi_job')
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
        Schema::dropIfExists('saldo');
        Schema::dropIfExists('konfirmasi_job');
    }
}
