<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detailwork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detailwork', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jobs_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('detailwork', function (Blueprint $table) {
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('detailwork', function (Blueprint $table) {
            $table->foreign('jobs')
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
