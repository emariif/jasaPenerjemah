<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       



        Schema::create('detail_job', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id')->unsigned();
            $table->bigInteger('pembayaran_id')->unsigned();
            $table->bigInteger('mailbox_id')->unsigned();   

        });

        Schema::create('mailbox', function (Blueprint $table) {
            $table->id();
            $table->string('pesan');
            $table->bigInteger('detailjob_id')->unsigned();
            

            
        });
        
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('detailjob_id')->unsigned();

        });

        Schema::table('mailbox', function (Blueprint $table) {
             // foreign key detail job to mailbox
             $table->foreign('detailjob_id')
             ->references('id')->on('detail_job')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });
        
        // foreign key table detail job
        Schema::table('detail_job', function (Blueprint $table) {
            
            // foreign key jobs
            $table->foreign('job_id')
            ->references('id')->on('jobs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            // foreign key pembayaran
            $table->foreign('pembayaran_id')
            ->references('id')->on('pembayaran')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            // foreign key mailbox
            $table->foreign('mailbox_id')
            ->references('id')->on('mailbox')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('invoice', function (Blueprint $table) {
             // foreign key detail job to mailbox
             $table->foreign('detailjob_id')
             ->references('id')->on('detail_job')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });
        // Schema::table('jobs', function (Blueprint $table) {
        //     $table->foreign('detailjob_id')
        //     ->references('id')->on('detail_job')
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        //    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_job');
        Schema::dropIfExists('mailbox');


    }
}
