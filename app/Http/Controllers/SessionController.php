<?php

namespace App\Http\Controllers;

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
        //        dd('create');

        //        return view('auth.register');
        dd(request()->all());
    }
}
