<li class="nav-item {{ Str::contains(request()->url(), 'messages')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-envelope text-warning position-relative">
            <span class="position-absolute top-0 start-0 translate-middle p-1 bg-danger rounded-circle">
                <span class="visually-hidden">New alerts</span>
            </span>
        </i>
        <p>
            Wiadomości
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item pt-3">
            <a href="{{ url('/messages/add') }}" class="nav-link {{ request()->is('messages/add') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Napisz wiadomość</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/messages/new') }}" class="nav-link {{ request()->is('messages/new') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Nowe wiadomości {!! BadgeHelper::badge(32) !!}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/messages/all') }}" class="nav-link {{ request()->is('messages/all') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Wszystkie wiadomości</p>
            </a>
        </li>
        <li class="nav-item pb-3">
            <a href="{{ url('/messages/archive') }}" class="nav-link {{ request()->is('messages/archive') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Archiwum wiadomości</p>
            </a>
        </li>
    </ul>
</li>
