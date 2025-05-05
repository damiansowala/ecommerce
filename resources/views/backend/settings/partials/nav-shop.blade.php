<li class="nav-item {{ Str::contains(request()->url(), 'settings/shop') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/shop') ? 'active' : '' }}">
        <i class="bi bi-dot text-warning"></i>


        <p>
            Sklep
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ps-2">
        <li class="nav-item">
            <a href="{{ url('/settings/shop/maintenance-mode') }}" class="nav-link {{ request()->is('settings/shop/maintenance-mode') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>

                <p>Tryb konserwacji</p>
            </a>
        </li>
        <li class="nav-item {{ Str::contains(request()->url(), 'settings/shop/pages') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/shop/pages') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>
                    Strony
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/about-company') }}" class="nav-link {{ request()->is('settings/shop/pages/about-company') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Informacje o firmie</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/contact') }}" class="nav-link {{ request()->is('settings/shop/pages/contact') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Kontakt</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/shop-terms') }}" class="nav-link {{ request()->is('settings/shop/pages/shop-terms') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Regulamin sklepu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/return-policy') }}" class="nav-link {{ request()->is('settings/shop/pages/return-policy') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Regulamin zwrotów</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/delivery-methods') }}" class="nav-link {{ request()->is('settings/shop/pages/delivery-methods') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Metody dostaw</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/payment-methods') }}" class="nav-link {{ request()->is('settings/shop/pages/payment-methods') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Metody płatności</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/privacy-policy') }}" class="nav-link {{ request()->is('settings/shop/pages/privacy-policy') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Polityka prywatności</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/pages/cookie-policy') }}" class="nav-link {{ request()->is('settings/shop/pages/cookie-policy') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Polityka cookies</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'settings/shop/layout')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/shop/layout') ? 'active' : '' }}">

                <i class="bi bi-dot"></i>
                <p>
                    Layout
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/layout/brand') }}" class="nav-link {{ Str::contains(request()->url(), 'settings/shop/layout/brand') ? 'active' : '' }}">


                        <i class="bi bi-dot"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/layout/banner-carousel') }}" class="nav-link {{ Str::contains(request()->url(), 'settings/shop/layout/banner-carousel') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Karuzela banerów</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/shop/layout/other-banners') }}" class="nav-link {{ Str::contains(request()->url(), 'settings/shop/layout/other-banners') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Pozostałe banery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Alert informacyjny</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Social Media</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
