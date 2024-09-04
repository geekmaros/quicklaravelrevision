<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function create()
    {
        //        dd('create');

        return view('auth.login');
    }

    public function store()
    {
        //        validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // attempt to authenticate the user

        // if not, redirect back
        if (! Auth::attempt($attributes)) {
            // if it fails it redirects back
            throw ValidationException::withMessages([
                'email' => 'Sorry, invalid credentials',
            ]);
        }

        // regenerate the session
        request()->session()->regenerate();

        // redirect
        return redirect('/jobs');
    }
}
