<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'code','name',
    ];

    public function language()
    {
        return $this->hasMany('App\Language');
    }
}
