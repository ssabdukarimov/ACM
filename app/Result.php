<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'lang_code', 'source', 'problem_id', 'user_id',
        'contest_id', 'user_time', 'user_memory',
        'test_count', 'test_ac_count', 'status_id',
        'desc',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function problem()
    {
        return $this->belongsTo('App\Problem', 'problem_id');
    }

    public function language()
    {
        return $this->belongsTo('App\Language', 'lang_code', 'code');
    }

    public function status()
    {
        return $this->belongsTo('App\Status', 'status_id');
    }
}
