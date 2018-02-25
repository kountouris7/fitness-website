<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">




            @if(! Auth::check())

                <a class="nav-link active" href="{{route('subscribe')}}">Subscribe</a>

                <a class="nav-link active" href="{{route('sign')}}">Login</a>

            @endif




            @if(Auth::check())


                <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>

                <a class="nav-link active" href="{{route('logout')}}">Logout</a>


            @endif


        </nav>
    </div>
</div>