<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name_uz', 'name_ru', 'name_en',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
