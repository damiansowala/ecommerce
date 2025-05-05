<li class="nav-item mb-3 {{ Str::contains(request()->url(), 'galleries')  ? 'menu-open' : '' }}">
    <a href="{{ url('/galleries/add') }}" class="nav-link">
        <i class="bi bi-images text-warning"></i>
        <p>
            Media
        </p>
    </a>
</li>
