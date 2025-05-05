<li class="nav-item mb-3">
    <a href="{{ url('/settings/users/create') }}" class="nav-link">
        <i class="bi bi-sliders"></i>
        <p>
            Przegląd ustawień
        </p>
    </a>
</li>


@include('backend.settings.partials.nav-users')
@include('backend.settings.partials.nav-global')
@include('backend.settings.partials.nav-ecommerce')
@include('backend.settings.partials.nav-shop')
