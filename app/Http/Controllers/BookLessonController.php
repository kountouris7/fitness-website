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
       ////if (Session::whereUserId(Auth::user())->get()) {

       //    session()->flash('notification', [
       //        'title'   => 'Error!',
       //        'message' => 'You\'ve already submitted this weeks timesheet',
       //        'type'    => 'info',
       //        'icon'    => 'fa fa-exclamation-circle'
       //    ]);

       //    return redirect()->home();
       //}
       //else{

        $user = Auth::user();

        $user->sessions()
                     ->attach(request('session_id'));

                session()->flash('notif', 'Booked Success');

                return redirect()->route('booklesson');

            }
       //}








}
