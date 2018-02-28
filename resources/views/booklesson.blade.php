@extends('master')


@section('content')


        @foreach ($lessons as $lesson)


    <div class="book-lesson">

        <div class="col-sm-8 blog-main">

            <div class="book-lesson-title">

                <h3>{{$lesson->name}} starting at {{ Carbon\Carbon::parse($lesson->date) }}</h3>

                <form method="POST" action="{{route('booklesson')}}">
                    {{csrf_field()}}

                        <div class="form-group">

                            <input type="hidden" name="session_id" value="{{$lesson->id}}">

                            <button type="submit" class="btn btn-primary">book now</button>

                        </div>



                    </form>

            </div>
    </div>
    </div>



        @endforeach



    @endsection