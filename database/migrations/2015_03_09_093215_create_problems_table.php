<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string('code', 6)->unique();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('body_uz');
            $table->text('body_ru');
            $table->text('body_en');
            $table->text('input_uz')->nullable(true);;
            $table->text('input_ru')->nullable(true);;
            $table->text('input_en')->nullable(true);;
            $table->text('output_uz')->nullable(true);;
            $table->text('output_ru')->nullable(true);;
            $table->text('output_en')->nullable(true);;
            $table->text('note_uz')->nullable(true);
            $table->text('note_ru')->nullable(true);
            $table->text('note_en')->nullable(true);
            $table->text('input_example')->nullable(true);;
            $table->text('output_example')->nullable(true);;
            $table->integer('time')->default('1000');
            $table->double('memory')->default('64');
            $table->double('point')->default('10');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('problems', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
