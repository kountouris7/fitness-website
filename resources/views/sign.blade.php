@extends('master')

@section('content')

<div class="col-sm-8">

    <h1>Log In</h1>

    <form method="POST" action="/sign">

        {{csrf_field()}}

        <div class="form-group">

            <label for="email">E-mail</label>

            <input type="email" class="form-control" id="email" name="email" required>

        </div>

        <div class="form-group">

            <label for="password">Password</label>

            <input type="password" class="form-control" id="password" name="password" required>

        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary">Sign In</button>

        </div>

        @include('layouts.error')

    </form>



</div>

    @endsection
