<li class="nav-item {{ Str::contains(request()->url(), 'messages')  ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="bi bi-chat-left-text text-warning position-relative">
            <span class="position-absolute top-0 start-0 translate-middle p-1 bg-danger rounded-circle">
                <span class="visually-hidden">New alerts</span>
            </span>
        </i>
        <p class="d-flex justify-content-between w-100">Live chat {!! BadgeHelper::badge(32) !!} </p>

    </a>
</li>
