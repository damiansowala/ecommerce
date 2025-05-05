<li class="nav-item mb-3 {{ Str::contains(request()->url(), 'orders')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-shop text-warning position-relative">
            <span class="position-absolute top-0 start-0 translate-middle p-1 bg-danger rounded-circle">
                <span class="visually-hidden">New alerts</span>
            </span>
        </i>
        <p>
            Sprzedaż
            <i class=" nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item pt-3">
            <a href="{{ url('/orders/add') }}" class="nav-link {{ request()->is('orders/add') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Utwórz zamówienie</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/orders/new') }}" class="nav-link {{ request()->is('orders/new') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Nowe zamówienia {!! BadgeHelper::badge(32) !!}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/orders/all') }}" class="nav-link {{ request()->is('orders/all') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Wszystkie zamówienia <span class="badge text-bg-danger rounded-pill">32</span></p>

            </a>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'storage')  ? 'menu-open' : '' }}">


            <a href="#" class="nav-link">
                <i class="bi bi-dot text-warning position-relative">
                    <span class="position-absolute top-0 start-0 translate-middle p-1 bg-danger rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </i>
                <p>
                    Zamowienia
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">


                <li class="nav-item pt-3">
                    <a href="{{ url('/storage/processing') }}" class="nav-link {{ request()->is('storage/processing') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p class="d-flex justify-content-between w-100">Do przygotowania {!! BadgeHelper::badge(32) !!}</p>


                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/storage/on-hold') }}" class="nav-link {{ request()->is('storage/on-hold') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p class="d-flex justify-content-between w-100">Wstrzymane {!! BadgeHelper::badge(32) !!}</p>


                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/storage/ready') }}" class="nav-link {{ request()->is('storage/ready') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p class="d-flex justify-content-between w-100">Do wysyłki {!! BadgeHelper::badge(32) !!}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/storage/completed') }}" class="nav-link {{ request()->is('storage/completed') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p class="d-flex justify-content-between w-100">Zrealizowane {!! BadgeHelper::badge(32) !!}</p>
                    </a>
                </li>
                <li class="nav-item pb-3">
                    <a href="{{ url('/storage/returned') }}" class="nav-link {{ request()->is('storage/returned') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p class="d-flex justify-content-between w-100">Zwroty {!! BadgeHelper::badge(32) !!}</p>
                    </a>
                </li>



            </ul>
        </li>




        <li class="nav-item">
            <a href="{{ url('/orders/all') }}" class="nav-link {{ request()->is('orders-zmiana/all') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p class="d-flex justify-content-between w-100">Dostawy <span class="badge text-bg-danger rounded-pill">32</span></p>

            </a>
        </li>

    </ul>
</li>
