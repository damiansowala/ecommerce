<li class="nav-item {{ Str::contains(request()->url(), 'settings/ecommerce') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/ecommerce') ? 'active' : '' }}">
        <i class="bi bi-dot text-warning"></i>


        <p>
            E-commerce

            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>


    <ul class="nav nav-treeview ps-2">


        <li class="nav-item">
            <a href="{{ url('/settings/ecommerce/sales-method') }}" class="nav-link {{ request()->is('settings/ecommerce/sales-method') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Metody sprzedaży</p>
            </a>
        </li>



        <li class="nav-item">
            <a href="{{ url('/settings/other/currencies') }}" class="nav-link {{ request()->is('settings/other/currencies') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Waluty</p>
            </a>
        </li>


        <li class="nav-item {{ Str::contains(request()->url(), 'payments') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/ecommerce') ? 'active' : '' }}">

                <i class="bi bi-dot"></i>

                <p>
                    Płatności
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/payments/methods') }}" class="nav-link {{ request()->is('settings/payments/methods') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Metody płatności</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/payments/invoice-settings') }}" class="nav-link {{ request()->is('settings/payments/invoice-settings') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Ustawienia faktur</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'shipping') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/ecommerce') ? 'active' : '' }}">

                <i class="bi bi-dot"></i>

                <p>
                    Dostawa
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/shipping/methods') }}" class="nav-link {{ request()->is('settings/shipping/methods') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Metody dostawy</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shipping/zones') }}" class="nav-link {{ request()->is('settings/shipping/zones') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Strefy dostawy</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shipping/tracking') }}" class="nav-link {{ request()->is('settings/shipping/tracking') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Śledzenie przesyłek</p>
                    </a>
                </li>
            </ul>
        </li>





        <li class="nav-item {{ Str::contains(request()->url(), 'settings/emails')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/ecommerce') ? 'active' : '' }}">

                <i class="bi bi-dot"></i>

                <p>
                    Podatki
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/stock-status') }}" class="nav-link {{ request()->is('settings/notifications/stock-status') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Informacja o zamówieniu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/new-orders') }}" class="nav-link {{ request()->is('settings/notifications/new-orders') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Informacja o statusie zamówienia</p>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
</li>
