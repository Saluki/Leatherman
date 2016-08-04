<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function displayForm()
    {
        return view('auth.form');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|max:50',
        ]);

        $email = $request->input('email');
        $hashedPassword = $request->input('password');

        if( Auth::attempt(['email'=>$email, 'password'=>$hashedPassword]) ) {
            return redirect('app');
        }

        return redirect('/')->with('auth-error', 'Les identifiants sont incorrects.')
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}