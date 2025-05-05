<li class="nav-item {{ Str::contains(request()->url(), 'clients')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-people-fill text-warning position-relative">
            <span class="position-absolute top-0 start-0 translate-middle p-1 bg-danger rounded-circle">
                <span class="visually-hidden">New alerts</span>
            </span>
        </i>
        <p>
            Klienci
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item pt-3">
            <a href="{{ url('/clients/client/create') }}" class="nav-link {{ request()->is('clients/client/create') ? 'active' : '' }}">

                <i class="bi bi-dot"></i>
                <p>Dodaj klienta</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/clients/client') }}" class="nav-link {{ request()->is('clients/client') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Wszyscy klienci</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/clients/client/verifed') }}" class="nav-link {{ request()->is('clients/client/verifed') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Weryfikacja klienta {!! ClientHelpers::countUnverifiedClients() !!}</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/clients/groups') }}" class="nav-link {{ request()->is('clients/groups') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Grupy klientów</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/clients/groups') }}" class="nav-link {{ request()->is('clients/groups') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Grupy rabatowe</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/clients/groups') }}" class="nav-link {{ request()->is('clients/groups') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Grupy dostaw</p>
            </a>
        </li>

    </ul>
</li>
