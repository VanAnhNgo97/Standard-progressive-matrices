<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    //
    protected $table = 'correct_answer';
    public $incrementing = false;
    protected $primaryKey = ['quiz_id','answer_id'];

    public function content()
    {
    	return $this->hasOne('App\Model\Answer','id','answer_id');
    }
}
