<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function construct()
    {

    }

    public function displayForm(Request $request)
    {
        return view('auth.form');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|max:50',
        ]);

        return "OK";
    }
}