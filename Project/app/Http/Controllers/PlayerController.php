<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class PlayerController extends Controller
{
    //
    public function GetResult(Request $request)
    {
    	$result = Auth::user()->results()
    							->orderBy('created_at','desc')
    							->simplePaginate(6);
    	return view('player_result', ['result' => $result]);

    	/*orderBy('raven_code', 'asc')->simplePaginate(1)*/
    }
}
