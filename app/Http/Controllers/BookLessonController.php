<?php

namespace App\Http\Controllers;

use App\Lessons;
use App\Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookLessonController extends Controller
{
    public function booklesson()
    {
        $lessons = Lessons::latest()->get();
        return view ('booklesson', compact('lessons'));

    }



    public function store(Request $request)
    {
        $user = Auth::user();

        $user->sessions()
            ->attach(request('session_id'));

        return redirect()->home();
    }




}
