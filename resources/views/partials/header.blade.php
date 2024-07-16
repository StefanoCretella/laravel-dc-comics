<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="DC Comics" class="logo-dc">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
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
