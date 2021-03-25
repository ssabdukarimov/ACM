<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
        });

        DB::table('statuses')->insert(['id' => 1, 'name_uz' => 'Navbatda', 'name_ru' => 'Ожидается проверка', 'name_en' => 'Waiting']);
        DB::table('statuses')->insert(['id' => 2, 'name_uz' => 'Tekshirilmoqda', 'name_ru' => 'Выполняется', 'name_en' => 'Running']);
        DB::table('statuses')->insert(['id' => 3, 'name_uz' => 'Kompilyatsiyada xatolik', 'name_ru' => 'Ошибка компиляции', 'name_en' => 'Compilation error	']);
        DB::table('statuses')->insert(['id' => 4, 'name_uz' => 'Vaqt limiti yuqori', 'name_ru' => 'Превышено ограничение времени', 'name_en' => 'Time limit exceeded']);
        DB::table('statuses')->insert(['id' => 5, 'name_uz' => 'Xotira limiti yuqori', 'name_ru' => 'Превышено ограничение памяти', 'name_en' => 'Memory limit exceeded']);
        DB::table('statuses')->insert(['id' => 6, 'name_uz' => 'Bajarish vaqtida xatolik', 'name_ru' => 'Ошибка исполнения', 'name_en' => 'Runtime error']);
        DB::table('statuses')->insert(['id' => 7, 'name_uz' => 'Xavfsizlik qoidalari buzilgan', 'name_ru' => 'Безопасность нарушена', 'name_en' => 'Security violation']);
        DB::table('statuses')->insert(['id' => 8, 'name_uz' => 'Chiqish formati notoʻgʻri', 'name_ru' => 'Ошибка формата вывода', 'name_en' => 'Presentation Error']);
        DB::table('statuses')->insert(['id' => 9, 'name_uz' => 'Qabul qilindi', 'name_ru' => 'Принято', 'name_en' => 'Accepted']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
