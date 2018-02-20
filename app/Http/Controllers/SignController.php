<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{



    public function __construct()
    {

        $this->middleware('guest',['except'=>'destroy']);
    }


    public function sign()

    {

        return view('sign');

    }

    public function store()
    {

        //attempt to auth user

        if(! auth()->attempt(request(['email','password'])))
        {

            return back()->withErrors([
                'message'=>'Please check your shit.'
            ]);
        }

        return redirect()->home();

        //if not -- redirect

    }



    public function destroy()
    {

        auth()->logout();

        return redirect()->route('home');

    }
}
