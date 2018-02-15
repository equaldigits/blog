<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link" href="#">New Features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New Hires</a>

          @if ( Auth::check())
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          @endif
          
          <h3 class="navbar navbar-light bg-faded">Blog Rui Moreira<h3>
          
        </nav>
</div>