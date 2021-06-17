<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jobs_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->longText('deskripsi');
            $table->timestamps();
        });

        Schema::table('proposals', function (Blueprint $table) {
            $table->foreign('jobs_id')
                  ->references('id')
                  ->on('jobs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        Schema::table('proposals', function (Blueprint $table) {
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
        Schema::dropIfExists('proposals');
    }
}
