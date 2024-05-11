<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('admin.dashboard') }}>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.users.index') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('admin.users.index') }}>
                    <span>Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.ideas.index') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('admin.ideas.index') }}>
                    <span>Ideas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.comments.index') ? 'text-white bg-primary rounded' : 'text-dark' }}"
                    href={{ route('admin.comments.index') }}>
                    <span>Comments</span></a>
            </li>
        </ul>
    </div>
</div>