<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    protected $fillable = [
        'name_uz', 'name_ru', 'name_en',
        'link', 'user_id', 'start', 'duration',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function contest()
    {
        return $this->hasMany('App\Contest');
    }
}
