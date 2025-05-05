<li class="nav-item {{ Str::contains(request()->url(), 'products')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-box2 text-warning"></i>
        <p>
            Produkty
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item pt-3">
            <a href="{{ url('/products/product/create') }}" class="nav-link {{ request()->is('products/product/create') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Dodaj produkt</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/products/product') }}" class="nav-link {{ request()->is('products/product') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Wszystkie produkty</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/products/categories') }}" class="nav-link {{ request()->is('products/categories') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Kategorie</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/products/attributes') }}" class="nav-link {{ request()->is('products/attributes') ? 'active' : '' }}">
                <i class="bi bi-dot"></i>
                <p>Atrybuty</p>
            </a>
        </li>


        {{-- <li class="nav-item">
    <a href="{{ url('/products/attributes') }}" class="nav-link {{ request()->is('products/attributes') ? 'active' : '' }}">
        <i class="bi bi-dot"></i>
        <p>Magazyn</p>
        </a>
</li> --}}

</ul>
</li>
