<li class="nav-item mb-3 {{ Str::contains(request()->url(), 'manufacturers')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-person-fill-gear text-warning"></i>
        <p>
            Producenci
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item pt-3">
            <a href="{{ url('/manufacturers/create') }}" class="nav-link {{ request()->is('manufacturers/create') ? 'active' : '' }}">

                <i class="bi bi-dot"></i>
                <p>Dodaj producenta</p>
            </a> </li>
        <li class="nav-item">
            <a href="{{ url('/manufacturers') }}" class="nav-link {{ request()->is('manufacturers') ? 'active' : '' }}">


                <i class="bi bi-dot"></i>
                <p>Wszyscy producenci</p>
            </a>
        </li>
    </ul>
</li>
