<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function subscribe()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        //validate form

        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed',
        ]);

        //create and save user

        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        //$user = User::create(request(['name','email','password']));

        //sign the in

        auth()->login($user);

        //redirect

        return redirect()->home();

    }

}
