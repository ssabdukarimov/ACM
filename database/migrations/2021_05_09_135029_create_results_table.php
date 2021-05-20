<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('problem_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('contest_id')->default(null);
            $table->string('lang_code');
            $table->text('source');
            $table->integer('user_time')->default(0);
            $table->double('user_memory')->default(0.0);
            $table->integer('test_count')->default(1);
            $table->integer('test_ac_count')->default(0);
            $table->unsignedBigInteger('status_id');
            $table->text('desc')->nullable();
            $table->timestamps();
        });


        Schema::table('results', function($table) {
            $table->foreign('problem_id')->references('id')->on('problems');
            $table->foreign('contest_id')->references('id')->on('contests');
            $table->foreign('lang_code')->references('code')->on('languages');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
