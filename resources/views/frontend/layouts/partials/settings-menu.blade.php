<li class="nav-item mb-3 {{ Str::contains(request()->url(), 'settings/users') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-person-fill-gear"></i>

        <p>
            Użytkownicy
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('/settings/users/create') }}" class="nav-link">
                <i class="bi bi-dot"></i>
                <p>
                    Dodaj użytkownika
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/settings/users') }}" class="nav-link">
                <i class="bi bi-dot"></i>
                <p>
                    Wszyscy użytkownicy
                </p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item mb-3">
    <a href="{{ url('/settings/users/create') }}" class="nav-link">
        <i class="bi bi-sliders"></i>
        <p>
            Przegląd ustawień
        </p>
    </a>
</li>

<li class="nav-item {{ Str::contains(request()->url(), 'settings/analysis') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-gear"></i>

        <p>
            Ustawienia ogólne
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>


    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ url('/settings/other/languages') }}" class="nav-link {{ request()->is('settings/other/languages') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>

                <p>Dane firmy</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/settings/other/languages') }}" class="nav-link {{ request()->is('settings/other/languages') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>

                <p>Języki</p>
            </a>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'settings/analysis') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>

                <p>
                    Analiza
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/ahrefs') }}" class="nav-link {{ Str::contains(request()->url(), 'ahrefs') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Ahrefs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/hotjar') }}" class="nav-link {{ Str::contains(request()->url(), 'hotjar') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Hotjar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/google-search-console') }}" class="nav-link {{ Str::contains(request()->url(), 'google-search-console') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Search Console</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/google-analytics') }}" class="nav-link {{ Str::contains(request()->url(), 'google-analytics') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Analytics</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/google-tag-manager') }}" class="nav-link {{ Str::contains(request()->url(), 'google-tag-manager') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Tag Manager</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/google-merchant-center') }}" class="nav-link {{ Str::contains(request()->url(), 'google-merchant-center') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Merchant Center</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/analysis/custom-scripts') }}" class="nav-link {{ Str::contains(request()->url(), 'custom-scripts') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Niestandardowe skrypty</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'settings/notifications') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>

                <p>
                    Powiadomienia
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/contact-forms') }}" class="nav-link {{ request()->is('settings/notifications/contact-forms') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Formularze kontaktowe</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ Str::contains(request()->url(), 'settings/emails') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>

                <p>
                    Szablony E-mail
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/stock-status') }}" class="nav-link {{ request()->is('settings/notifications/stock-status') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/new-orders') }}" class="nav-link {{ request()->is('settings/notifications/new-orders') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/contact-forms') }}" class="nav-link {{ request()->is('settings/notifications/contact-forms') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 3</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>

<li class="nav-item {{ Str::contains(request()->url(), 'settings/analysis') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-shop"></i>

        <p>
            Ustawienia e-commerce

            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>


    <ul class="nav nav-treeview">

        <li class="nav-item {{ Str::contains(request()->url(), 'payments') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
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
            <a href="#" class="nav-link">
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

        <li class="nav-item">
            <a href="{{ url('/settings/other/currencies') }}" class="nav-link {{ request()->is('settings/other/currencies') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>

                <p>Sposoby sprzedaży</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/settings/other/currencies') }}" class="nav-link {{ request()->is('settings/other/currencies') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>

                <p>Waluty</p>
            </a>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'settings/emails')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
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


        <li class="nav-item {{ Str::contains(request()->url(), 'settings/notifications') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>

                <p>
                    Powiadomienia
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/stock-status') }}" class="nav-link {{ request()->is('settings/notifications/stock-status') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Stany magazynowe</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/new-orders') }}" class="nav-link {{ request()->is('settings/notifications/new-orders') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Nowe zamówienia</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/new-orders') }}" class="nav-link {{ request()->is('settings/notifications/new-orders') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Nowe zwroty</p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'settings/emails')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>

                <p>
                    Szablony E-mail
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
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/contact-forms') }}" class="nav-link {{ request()->is('settings/notifications/contact-forms') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 3</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>


<li class="nav-item {{ Str::contains(request()->url(), 'settings/pages') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-layout-text-window-reverse"></i>

        <p>
            Ustawienia frontend
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ url('/settings/other/maintenance-mode') }}" class="nav-link {{ request()->is('settings/other/maintenance-mode') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>

                <p>Tryb konserwacji</p>
            </a>
        </li>
        <li class="nav-item {{ Str::contains(request()->url(), 'settings/pages') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>

                <p>
                    Strony
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/about-company') }}" class="nav-link {{ request()->is('settings/pages/about-company') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Informacje o firmie</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/contact') }}" class="nav-link {{ request()->is('settings/pages/contact') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Kontakt</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/shop-terms') }}" class="nav-link {{ request()->is('settings/pages/shop-terms') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Regulamin sklepu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/return-policy') }}" class="nav-link {{ request()->is('settings/pages/return-policy') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Regulamin zwrotów</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/delivery-methods') }}" class="nav-link {{ request()->is('settings/pages/delivery-methods') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Metody dostaw</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/payment-methods') }}" class="nav-link {{ request()->is('settings/pages/payment-methods') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Metody płatności</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/privacy-policy') }}" class="nav-link {{ request()->is('settings/pages/privacy-policy') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Polityka prywatności</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/pages/cookie-policy') }}" class="nav-link {{ request()->is('settings/pages/cookie-policy') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Polityka cookies</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), 'products')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="bi bi-dot"></i>
                <p>
                    Layout
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/brand') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/banner-carousel') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Karuzela banerów</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/notifications/other-banners') }}" class="nav-link">
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
