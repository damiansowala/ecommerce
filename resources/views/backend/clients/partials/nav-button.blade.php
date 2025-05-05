    <div class="col-12 col-md-6 text-end">
        <nav>

            @if (!Str::contains(request()->url(), 'all'))
            <a href="{{ url('/clients/client') }}" class="btn btn-outline-light">
                <i class="bi bi-list-ul me-1"></i>
                Lista klientów
            </a>
            @endif

            @if (!Str::contains(request()->url(), 'add'))
            <a href="{{ url('/clients/client/create') }}" class="btn btn-outline-light">
                <i class="bi bi-plus-circle me-1"></i>
                Dodaj klienta
            </a>
            @endif

            @if (Str::contains(request()->url(), 'show'))
            <a href="#" class="btn btn-outline-light">
                <i class="bi bi-pencil-square me-1"></i>
                Edutuj klienta
            </a>

            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-trash-fill me-1"></i>
                Usuń klienta
            </button>
            @endif





        </nav>


    </div>
