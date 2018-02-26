<?php

namespace App\Http\Controllers;

use App\Lessons;
use Illuminate\Http\Request;


class BookLessonController extends Controller
{
    public function booklesson()
    {
        $lessons = Lessons::latest()->get();
        return view ('booklesson', compact('lessons'));

    }
}
