<li class="nav-item {{ Str::contains(request()->url(), 'traders')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-people text-warning"></i>
        <p>
            Handlowcy
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item pt-3">
            <a href="{{ url('/traders/create') }}" class="nav-link {{ request()->is('traders/add') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Dodaj handlowca</p>
            </a> </li>
        <li class="nav-item">
            <a href="{{ url('/traders') }}" class="nav-link {{ request()->is('traders/all') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Wszyscy handlowcy</p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ url('/traders/groups/all') }}" class="nav-link {{ request()->is('traders/groups/all') ? 'active' : '' }}">
        <i class="bi bi-dot"></i>
        <p>Grupy handlowców</p>
        </a>
</li> --}}



</ul>
</li>
