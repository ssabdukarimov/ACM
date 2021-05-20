<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContestProblems extends Model
{
    protected $fillable = [
        'code', 'contest_id', 'problem_id', 'point',
    ];

    public function problem()
    {
        return $this->belongsTo('App\Problem', 'problem_id');
    }

    public function contest()
    {
        return $this->belongsTo('App\Contest', 'contest_id');
    }
}
