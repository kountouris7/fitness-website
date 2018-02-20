<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">




            @if(! Auth::check())

                <a class="nav-link active" href="http://127.0.0.1:8000/subscribe">Subscribe</a>

                <a class="nav-link active" href="http://127.0.0.1:8000/sign">Login</a>

            @endif




            @if(Auth::check())


                <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>

                <a class="nav-link active" href="http://127.0.0.1:8000/logout">Logout</a>


            @endif


        </nav>
    </div>
</div>