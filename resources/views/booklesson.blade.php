@extends('master')


@section('content')


        @foreach ($lessons as $lesson)


    <div class="book-lesson">

        <div class="col-sm-8 blog-main">

            <h1 class="book-lesson-title">





                <a href="/booklesson/{{$lesson->id}}">

                    <form method="POST" action="/booklesson/2">
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">{{$lesson->name}}</button>

                        </div>


                    </form>

                </a>



            </h1>


        </div>
    </div>

        @endforeach



    @endsection