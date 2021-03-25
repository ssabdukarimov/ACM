<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->string('code')->unique();
            $table->string('name');
        });

        DB::table('languages')->insert(['code' => 'cpp98', 'name' => 'GNU C++ 98']);
        DB::table('languages')->insert(['code' => 'cpp11', 'name' => 'GNU C++ 11']);
        DB::table('languages')->insert(['code' => 'cpp14', 'name' => 'GNU C++ 14']);
        DB::table('languages')->insert(['code' => 'cpp17', 'name' => 'GNU C++ 17']);
        DB::table('languages')->insert(['code' => 'pas', 'name' => 'Free Pascal']);
        DB::table('languages')->insert(['code' => 'delphi', 'name' => 'Delphi']);
        DB::table('languages')->insert(['code' => 'py2', 'name' => 'Python 2']);
        DB::table('languages')->insert(['code' => 'py3', 'name' => 'Python 3']);
        DB::table('languages')->insert(['code' => 'java8', 'name' => 'Java 8']);
        DB::table('languages')->insert(['code' => 'java11', 'name' => 'Java 11']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
