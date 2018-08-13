<?php

namespace App\Http\Controllers\Auth;


use App\AuthenticateUser;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authenticate;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(AuthenticateUser $auth)
    {
        $auth->invite();
        return 'Go chek that email';

    }
}
