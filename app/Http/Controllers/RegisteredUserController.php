<?php

namespace App\Http\Controllers;

class RegisteredUserController extends Controller
{
    public function create()
    {
        //        dd('create');

        return view('auth.register');
    }

    public function store()
    {
        //        dd('create');

        //        return view('auth.register');
        dd(request()->all());
    }
}
