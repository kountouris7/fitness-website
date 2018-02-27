<?php

namespace App\Http\Controllers;

use App\Lessons;
use App\Session;
use App\User;
use Illuminate\Http\Request;


class BookLessonController extends Controller
{
    public function booklesson()
    {
        $lessons = Lessons::latest()->get();
        return view ('booklesson', compact('lessons'));

    }



    public function store()
    {
        Session::create([
            'user_id'   => request('user_id'),
            'session_id'    => request('session_id'),
            //'user_id' => auth()->id()
        ]);

        //Then redirect to homepage

        return redirect('/');
    }




}
