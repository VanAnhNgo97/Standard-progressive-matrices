<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    protected $table = 'quiz';
    public function correctAnswer()
    {
    	return $this->hasOne('App\Model\CorrectAnswer','quiz_id','id');
    }
    public function answers()
    {
    	return $this->hasMany('App\Model\Answer','quiz_id','id');
    }
}
