<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function addUser(Request $req)
    {
        $this->validate($req, 
        [
            'password' => 'confirmed|min:6'
        ], 
        [
            'password.confirmed'=>'Mật khẩu chưa đúng',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự'
        ]);

        $user = new User();
        $user->full_name=$req->first_name." ".$req->last_name;
        $user->password = hash('md5', $req->password);
        $user->username = $req->user_name;
        $user->email = $req->email;
        $user->birthday = $req->birthday;
        $user->permission = 'player';
        $user->save();
        Auth::guard()->login($user);
        return redirect()->route('raven.home');
    }
}
