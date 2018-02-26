@extends('master')


@section('content')


        @foreach ($lessons as $lesson)


    <div class="blog-post">

        <div class="col-sm-8 blog-main">

            <h1 class="blog-post-title">

                <a href="/booklesson/{{$lesson->id}}">

                    {{$lesson->name}}

                </a>

            </h1>



    @endforeach



    @endsection;

