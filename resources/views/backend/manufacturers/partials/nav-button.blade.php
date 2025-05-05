<div class="col-12 col-md-6 text-end">
    <nav>

        @if (!Str::contains(request()->url(), 'manufacturers'))
        <a href="{{ url('/manufacturers') }}" class="btn btn-outline-light">
            <i class="bi bi-list-ul me-1"></i>
            Lista producentów
        </a>
        @endif

        @if (!Str::contains(request()->url(), 'create'))
        <a href="{{ url('/manufacturers/create') }}" class="btn btn-outline-light">
            <i class="bi bi-plus-circle me-1"></i>
            Dodaj produceta
        </a>
        @endif

        @if (Str::contains(request()->url(), 'show'))
        <a href="#" class="btn btn-outline-light">
            <i class="bi bi-pencil-square me-1"></i>
            Edutuj producenta
        </a>

        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash-fill me-1"></i>
            Usuń producenta
        </button>
        @endif

    </nav>
</div>
