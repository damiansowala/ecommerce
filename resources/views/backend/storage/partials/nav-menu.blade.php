{{-- <li class="nav-item mb-3 {{ Str::contains(request()->url(), 'storage')  ? 'menu-open' : '' }}">

<a href="#" class="nav-link">
    <i class="bi bi-file-earmark-text text-warning"></i>

    <p>
        Magazyn
        <i class="nav-arrow bi bi-chevron-right"></i>
    </p>
</a>


<ul class="nav nav-treeview pt-3">




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
        <a href="#" class="nav-link">
            <i class="bi bi-dot text-warning"></i>
            <p>
                Dokumenty
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview ps-2">


            <li class="nav-item pt-3">
                <a href="{{ url('/documents/add') }}" class="nav-link {{ request()->is('documents/add') ? 'active' : '' }}">
                    <i class="bi bi-dot"></i>
                    <p>Zamówenia</p>
                </a>
            </li>
            <li class="nav-item pb-3">
                <a href="{{ url('/documents/all') }}" class="nav-link {{ request()->is('documents/all') ? 'active' : '' }}">
                    <i class="bi bi-dot"></i>
                    <p>Zrealizowane</p>
                </a>
            </li>



        </ul>
    </li>
</ul>
</li> --}}
