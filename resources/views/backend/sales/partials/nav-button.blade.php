<div class="col-12 col-md-6 text-end">
    <nav>


        <a href="{{ url('/clients/client') }}" class="btn btn-outline-light">
            <i class="bi bi-list-ul me-1"></i>
            Nowe zamówienia
        </a>

        <a href="{{ url('/clients/client') }}" class="btn btn-outline-light">
            <i class="bi bi-list-ul me-1"></i>
            Wszystkkie zamóweinia
        </a>

        <a href="{{ url('/clients/client/create') }}" class="btn btn-outline-light">
            <i class="bi bi-plus-circle me-1"></i>
            Dodaj zamówienie
        </a>

        @if (Str::contains(request()->url(), 'show'))

        <a href="#" class="btn btn-outline-light">
            <i class="bi bi-pencil-square me-1"></i>
            Edutuj zamówienie
        </a>

        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash-fill me-1"></i>
            Usuń zamówienie
        </button>

        @endif

    </nav>
</div>
