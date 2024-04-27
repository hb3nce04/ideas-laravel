<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
    data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1">
            </span>{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{route('login')}}>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{route('register')}}>Register</a>
                    </li>
                @endguest
                @auth()
                {{-- <img style="width:35px" class="avatar-sm rounded-circle"
                    src="https://api.dicebear.com/8.x/initials/svg?&backgroundType=gradientLinear&radius=50&seed={{Auth::user()->name}}" alt={{Auth::user()->name}}> --}}
                    <li class="nav-item">
                        <a class="nav-link" href={{route('profile')}}>Hello, {{Auth::user()->name}}!</a>
                    </li>
                    <li class="nav-item">
                        <form action={{route('logout')}} method="POST">
                            @csrf
                            <button class="btn btn-danger btn-small" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
