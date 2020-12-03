<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Taekwondo</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ url('/dashboard') }}">Home</a>
                @if(auth()->user()->level == 'admin')
                <a class="nav-link" href="{{ url('/students') }}">Students</a>
                @endif
            </div>
            <div class="top-right links">
                    <a class="nav-link" href="{{ url('/logout') }}">Log Out</a>
            </div>
        </div>
    </div>
</nav>