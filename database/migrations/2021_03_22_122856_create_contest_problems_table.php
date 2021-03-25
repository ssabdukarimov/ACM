<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_problems', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('contest_id');
            $table->unsignedBigInteger('problem_id');
            $table->double('point');
            $table->timestamps();
        });

        Schema::table('contest_problems', function($table) {
            $table->foreign('problem_id')->references('id')->on('problems');
            $table->foreign('contest_id')->references('id')->on('contests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contest_problems');
    }
}
