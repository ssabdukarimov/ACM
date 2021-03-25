<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
        });

        DB::table('regions')->insert(['id' => 1, 'name_uz' => 'Andijon viloyati', 'name_ru' => 'Андижанская область', 'name_en' => 'Andijan Region']);
        DB::table('regions')->insert(['id' => 2, 'name_uz' => 'Buxoro viloyati', 'name_ru' => 'Бухарская область', 'name_en' => 'Bukhara Region']);
        DB::table('regions')->insert(['id' => 3, 'name_uz' => 'Fargʻona viloyati', 'name_ru' => 'Ферганская область', 'name_en' => 'Fergana Region']);
        DB::table('regions')->insert(['id' => 4, 'name_uz' => 'Jizzax viloyati', 'name_ru' => 'Джизакская область', 'name_en' => 'Djizzak Region']);
        DB::table('regions')->insert(['id' => 5, 'name_uz' => 'Namangan viloyati', 'name_ru' => 'Наманганская область', 'name_en' => 'Namangan Region']);
        DB::table('regions')->insert(['id' => 6, 'name_uz' => 'Navoiy viloyati', 'name_ru' => 'Навоийская область', 'name_en' => 'Navoiy Region']);
        DB::table('regions')->insert(['id' => 7, 'name_uz' => 'Qashqadaryo viloyati', 'name_ru' => 'Кашкадарьинская область', 'name_en' => 'Kashkadarya Region']);
        DB::table('regions')->insert(['id' => 8, 'name_uz' => 'Qoraqalpogʻiston Respublikasi', 'name_ru' => 'Республика Каракалпакстан', 'name_en' => 'Republic of Karakalpakistan']);
        DB::table('regions')->insert(['id' => 9, 'name_uz' => 'Samarqand viloyati', 'name_ru' => 'Самаркандская область', 'name_en' => 'Samarqand Region']);
        DB::table('regions')->insert(['id' => 10, 'name_uz' => 'Sirdaryo viloyati', 'name_ru' => 'Сырдарьинская область', 'name_en' => 'Syrdarya Region']);
        DB::table('regions')->insert(['id' => 11, 'name_uz' => 'Surxondaryo viloyati', 'name_ru' => 'Сурхандарьинская область', 'name_en' => 'Surkhandarya Region']);
        DB::table('regions')->insert(['id' => 12, 'name_uz' => 'Toshkent viloyati', 'name_ru' => 'Ташкентская область', 'name_en' => 'Tashkent Region']);
        DB::table('regions')->insert(['id' => 13, 'name_uz' => 'Toshkent shahar', 'name_ru' => 'Город Ташкент', 'name_en' => 'Tashkent city']);
        DB::table('regions')->insert(['id' => 14, 'name_uz' => 'Xorazm viloyati', 'name_ru' => 'Хорезмская область', 'name_en' => 'Khorezm Region']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
