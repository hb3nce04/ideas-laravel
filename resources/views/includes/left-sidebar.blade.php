<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('dashboard') }}>
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('feed') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('feed') }}>
                    <span>Feed</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('terms') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('terms') }}>
                    <span>Terms</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link">
                    <span>Explore</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <span>Feed</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <span>Support</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <span>Settings</span></a>
            </li> --}}
        </ul>
    </div>
    @auth
        <div class="card-footer text-center py-2">
            <a class="btn btn-link btn-sm" href={{ route('profile') }}>View Profile </a>
        </div>
    @endauth
</div>
