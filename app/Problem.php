<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $fillable = [
        'code','name_uz', 'name_ru', 'name_en',
        'body_uz', 'body_ru', 'body_en',
        'input_uz', 'input_ru', 'input_en',
        'output_uz', 'output_ru', 'output_en',
        'note_uz', 'note_ru', 'note_en',
        'time', 'memory', 'point', 'user_id',
        'input_example', 'output_example',
    ];
}
