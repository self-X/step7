<?php

namespace App;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class AuthenticateUser
{
        use ValidatesRequests;
    protected $request;

    public function __constructor(Request $request)
    {
        $this->request = $request;
    
    } 

    public function invite()
    {
            //validate Request
            //Create a token (which will be assosiate with a user)
            //send it to them
        $this->validateRequest()
            ->createToken()
            ->send();
    }

    protected function validateRequest()
    {
        $this->validate($this->request, [
            'email' => 'required|email|exist:users'
        ]);
        return $this;
    }

    protected function createToken()
    {
        return $this;
    }

    protected function send()
    {
        return $this;
    }
}