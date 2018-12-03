<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Result;
use App\User;
class ResultController extends Controller
{
    //
    public function GetAllResult(Request $request)
    {
    	$result_list = Result::orderBy('created_at', 'desc')->simplePaginate(9);
    	return view('admin.result_index', ['result_list' => $result_list]);
    }
    public function GetPlayerResult(Request $request)
    {
        $id = (int)$request->id;
        $result_list = Result::where('user_id', $id)->simplePaginate(6);
        return view('admin.player_result', [
                                            'result_list' => $result_list, 
                                            'player_name' => $result_list[1]->player->full_name
                                           ]);
    }
}
