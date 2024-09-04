<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function store()
    {
        //       validate
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed'], // confirmed = password_confirmation
        ]);

        //        dd($attributes);
        //     create the user
        $user = User::create($attributes);

        //     sign the user in
        Auth::login($user);

        //     redirect
        return redirect('/jobs');

    }

    public function create()
    {
        //        dd('create');

        return view('auth.register');
    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/');
    }
}
