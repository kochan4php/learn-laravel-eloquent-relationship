<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Eloquent Relationship</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::is('learn-laravel-eloquent-relationship/one-to-one')) active @endif"
                        href="{{ route('one-to-one') }}">
                        One to One
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">One to Many</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Many to Many</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
