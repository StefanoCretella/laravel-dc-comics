<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Comics</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.create') }}">Create</a>
            </li>
        </ul>
    </div>
</nav>
