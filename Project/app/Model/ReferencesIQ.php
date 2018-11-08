<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReferencesIQ extends Model
{
    //
    protected $table = 'references_iq';
    public static function estimateIQ($iq_score){
    	if($iq_score > 129 )
    	{
    		return "rất thông minh";
    	}
    	else if($iq_score > 119)
    	{
    		return "thông minh";
    	}
    	else if($iq_score > 109)
    	{
    		return "trung bình trên";
    	}
    	else if($iq_score > 89)
    	{
    		return "trung bình";
    	}
    	else if($iq_score > 79)
    	{
    		return "trung bình dưới";
    	}
    	else if($iq_score > 69)
    	{
    		return "trạng thái ranh giới";
    	}
    	else 
    		return "bị khuyết tật";
    }
}
