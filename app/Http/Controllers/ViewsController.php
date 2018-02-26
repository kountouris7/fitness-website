<?php

namespace App\Http\Controllers;

class ViewsController extends Controller
{
    public function welcome()
    {
        return view('index');
    }

    public function classes()
    {
        return view('classes');
    }

    public function personal()
    {
        return view('personal training');
    }

    public function gallery()
    {
        return view('gallery');
    }


}
