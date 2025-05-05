<li class="nav-item {{ Str::contains(request()->url(), 'settings/global') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/global') ? 'active' : '' }}">
        <i class="bi bi-dot text-warning"></i>


        <p>
            Ogólne
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ps-2">
        <li class="nav-item">
            <a href="{{ url('/settings/global/company') }}" class="nav-link {{ request()->is('settings/global/company') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Dane firmy</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/settings/global/languages') }}" class="nav-link {{ request()->is('settings/global/languages') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Języki</p>
            </a>
        </li>
        <li class="nav-item {{ Str::contains(request()->url(), 'settings/global/analysis') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/global/analysis') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>
                    Analiza
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/ahrefs') }}" class="nav-link {{ Str::contains(request()->url(), 'ahrefs') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Ahrefs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/hotjar') }}" class="nav-link {{ Str::contains(request()->url(), 'hotjar') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Hotjar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/google-search-console') }}" class="nav-link {{ Str::contains(request()->url(), 'google-search-console') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Search Console</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/google-analytics') }}" class="nav-link {{ Str::contains(request()->url(), 'google-analytics') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Analytics</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/google-tag-manager') }}" class="nav-link {{ Str::contains(request()->url(), 'google-tag-manager') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Tag Manager</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/google-merchant-center') }}" class="nav-link {{ Str::contains(request()->url(), 'google-merchant-center') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Google Merchant Center</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/analysis/custom-scripts') }}" class="nav-link {{ Str::contains(request()->url(), 'custom-scripts') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Niestandardowe skrypty</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ Str::contains(request()->url(), 'settings/global/notifications') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/global/notifications') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>
                    Powiadomienia
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/settings/global/notifications/contact-forms') }}" class="nav-link {{ request()->is('settings/global/notifications/contact-forms') ? 'active' : '' }}">


                        <i class="bi bi-dot"></i>
                        <p>Formularze kontaktowe</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/notifications/stock-status') }}" class="nav-link {{ request()->is('settings/global/notifications/stock-status') ? 'active' : '' }}">


                        <i class="bi bi-dot"></i>
                        <p>Stany magazynowe</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/notifications/new-orders') }}" class="nav-link {{ request()->is('settings/global/notifications/new-orders') ? 'active' : '' }}">


                        <i class="bi bi-dot"></i>
                        <p>Nowe zamówienia</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/notifications/new-orders') }}" class="nav-link {{ request()->is('settings/global/notifications/new-orders') ? 'active' : '' }}">


                        <i class="bi bi-dot"></i>
                        <p>Nowe zwroty</p>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item {{ Str::contains(request()->url(), 'settings/global/email') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Str::contains(request()->url(), 'settings/global/email') ? 'active' : '' }}">
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

                <li class="nav-item">
                    <a href="{{ url('/settings/global/email/1') }}" class="nav-link {{ request()->is('settings/global/email/1') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/email/2') }}" class="nav-link {{ request()->is('settings/global/email/2') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/settings/global/email/3') }}" class="nav-link {{ request()->is('settings/global/email/3') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>szablon 3</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
