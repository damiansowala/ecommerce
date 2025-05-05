<li class="nav-item {{ Str::contains(request()->url(), 'settings/users') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/users') ? 'active' : '' }}">
        <i class="bi bi-dot text-warning"></i>
        <p>
            Użytkownicy
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ps-2">
        <li class="nav-item">
            <a href="{{ url('/settings/users/create') }}" class="nav-link {{ request()->is('settings/users/create') ? 'active' : '' }}">


                <i class="bi bi-dot"></i>
                <p>
                    Dodaj użytkownika
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/settings/users') }}" class="nav-link {{ request()->is('settings/users') ? 'active' : '' }}">


                <i class="bi bi-dot"></i>
                <p>
                    Wszyscy użytkownicy
                </p>
            </a>
        </li>
    </ul>
</li>
