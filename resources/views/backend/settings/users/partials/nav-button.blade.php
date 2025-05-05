<div class="col-12 col-md-6 text-end">
    <nav>

        @if (!Str::contains(request()->url(), 'all'))
        <a href="{{ route('users.index')  }}" class="btn btn-outline-light">
            <i class="bi bi-list-ul me-1"></i>
            Lista użytkowników
        </a>
        @endif

        @if (!Str::contains(request()->url(), 'create'))
        <a href="{{ route('users.create') }}" class="btn btn-outline-light">
            <i class="bi bi-plus-circle me-1"></i>
            Dodaj uzytkownika
        </a>
        @endif

        @if (Str::contains(request()->url(), 'show'))
        <a href="{{ route('users.edit', $user) }}" class="btn btn-outline-light">
            <i class="bi bi-pencil-square me-1"></i>
            Edutuj użytkownika
        </a>

        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash-fill me-1"></i>
            Usuń użytkownika
        </button>
        @endif

    </nav>
</div>
