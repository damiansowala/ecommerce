<li class="nav-item mb-3 {{ Str::contains(request()->url(), 'documents')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-shop text-warning position-relative">
            <span class="position-absolute top-0 start-0 translate-middle p-1 bg-danger rounded-circle">
                <span class="visually-hidden">New alerts</span>
            </span>
        </i>
        <p>
            Dokumenty
            <i class=" nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item pt-3">
            <a href="{{ url('/documents/add') }}" class="nav-link {{ request()->is('documents/add') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Magazynowe</p>

            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/documents/new') }}" class="nav-link {{ request()->is('documents/new') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Faktury {!! BadgeHelper::badge(32) !!}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/documents/all') }}" class="nav-link {{ request()->is('documents/all') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Przewozowe <span class="badge text-bg-danger rounded-pill">32</span></p>

            </a>
        </li>


        <li class="nav-item">
            <a href="{{ url('/documents/all') }}" class="nav-link {{ request()->is('documents/all') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Dostawy <span class="badge text-bg-danger rounded-pill">32</span></p>

            </a>
        </li>


        {{-- <li class="nav-item pb-3">
            <a href="#" class="nav-link">
                <i class="bi bi-dot text-warning"></i>
                <p>
                    Faktury
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/orders/documents/paid') }}" class="nav-link {{ request()->is('orders/documents/paid') ? 'active' : '' }}">
        <i class="bi bi-dot"></i>
        <p>Opłacone</p>
        </a>
</li>
<li class="nav-item">
    <a href="{{ url('/orders/documents/no-paid') }}" class="nav-link {{ request()->is('orders/documents/no-paid') ? 'active' : '' }}">
        <i class="bi bi-dot"></i>
        <p>Nie opłacone</p>
    </a>
</li>
</ul>
</li> --}}

</ul>
</li>
