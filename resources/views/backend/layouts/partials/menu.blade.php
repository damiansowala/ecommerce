<li class="nav-item{{ Str::contains(request()->url(), 'developer')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-code-slash text-warning"></i>
        <p>
            Developer
            <i class="nav-arrow bi bi-chevron-right"></i>

        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('/telescope') }}" class="nav-link" target="_blank">
                <i class="bi bi-dot"></i>
                <p>Telescope</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/translations') }}" class="nav-link" target="_blank">


                <i class="bi bi-dot"></i>
                <p>Translations</p>

            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/dev/roles') }}" class="nav-link {{ request()->is('clients/verification-company') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Spatie Laravel Permission</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item mb-5 {{ Str::contains(request()->url(), 'settings')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-gear-fill text-warning"></i>
        <p>
            Ustawienia
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">


        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="bi bi-dot text-warning"></i>


                <p>
                    Przegląd ustawień
                </p>
            </a>
        </li>

        @include('backend.settings.partials.nav-users')
        @include('backend.settings.partials.nav-global')
        @include('backend.settings.partials.nav-ecommerce')
        @include('backend.settings.partials.nav-shop')


    </ul>
</li>




<li class="nav-item {{ Str::contains(request()->url(), 'dashboard')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-speedometer text-warning"></i>
        <p>
            Dashboard
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>


    <ul class="nav nav-treeview">

        <li class="nav-item {{ Str::contains(request()->url(), 'dashboard')  ? 'menu-open' : '' }}">


            <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-dot text-warning"></i>
                <p>Kokpit</p>
            </a>
        </li>

        <li class="nav-item {{ Str::contains(request()->url(), '#')  ? 'menu-open' : '' }}">


            <a href="#" class="nav-link">
                <i class="bi bi-dot text-warning"></i>
                <p>
                    Statystyki
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview ps-2">
                <li class="nav-item">
                    <a href="{{ url('/#') }}" class="nav-link {{ request()->is('#') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Sprzedaży</p>
                    </a>
                </li>
                <li class="nav-item pb-3">
                    <a href="{{ url('/#') }}" class="nav-link {{ request()->is('#') ? 'active' : '' }}">
                        <i class="bi bi-dot"></i>
                        <p>Prowizje</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>






@include('backend.galleries.partials.nav-menu')
@include('backend.products.partials.nav-menu')
@include('backend.sales.partials.nav-menu')
@include('backend.documents.partials.nav-menu')
@include('backend.clients.partials.nav-menu')
@include('backend.traders.partials.nav-menu')
@include('backend.manufacturers.partials.nav-menu')

@include('backend.storage.partials.nav-menu')
@include('backend.messages.partials.nav-menu')
@include('backend.livechats.partials.nav-menu')
