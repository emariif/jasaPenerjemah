<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
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
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama_job');
            $table->string('deskripsi');
            $table->integer('jumlah_halaman');
            $table->date('tanggal_mulai');
            $table->string('durasi');
            $table->integer('total_harga');
            $table->bigInteger('kategori_bahasa_id')->unsigned();
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->string('note_review');
            $table->integer('rating');
            $table->bigInteger('job_id')->unsigned();;
        });
        
        Schema::create('kategori_bahasa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori_bahasa');
        });

        Schema::create('konfirmasi_job', function (Blueprint $table) {
            $table->id();
            $table->string('status_job');
        });
        
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('note');
            $table->bigInteger('job_id')->unsigned();;

        });

        Schema::create('upload_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('dokumen');
            $table->string('tipe_dokumen');
            $table->integer('ukuran_dokumen');
            $table->bigInteger('user_id')->unsigned();;


        });
        
        // foreign key
        
        Schema::table('jobs', function (Blueprint $table) {
            // foreign key jobs
            $table->foreign('konfirmasi_job_id')
            ->references('id')->on('konfirmasi_job')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            // foreign key review
            $table->foreign('kategori_bahasa_id')
            ->references('id')->on('kategori_bahasa')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            // foreign key review
            $table->foreign('upload_id')
            ->references('id')->on('upload_dokumen')
            ->onDelete('cascade')
            ->onUpdate('cascade');


        });
       
        
        Schema::table('review', function (Blueprint $table) {
            // foreign key review
            $table->foreign('job_id')
            ->references('id')->on('jobs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('report', function (Blueprint $table) {
            // foreign key review
            $table->foreign('job_id')
            ->references('id')->on('jobs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('upload_dokumen', function (Blueprint $table) {
            // foreign key review
            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('konfirmasi_job');
        Schema::dropIfExists('review');
    }
}
