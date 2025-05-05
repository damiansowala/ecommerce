<div class="row d-flex align-items-center mb-3">
    <div class="col-12 col-md-1">
        <div class="input-group input-group-sm">


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#options-table">

                <i class="bi bi-layout-three-columns"></i>

            </button>


            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#filters-table">


                <i class="bi bi-funnel"></i></i>


            </button>

            {{-- <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#search-table">


                <i class="bi bi-search me-1"></i> Szukaj


            </button> --}}

        </div>

    </div>

    <div class="col-12 col-md-5">


        <form class="row" role="search">
            <div class="col-12 col-md-8">
                <input class="form-control form-control-sm bg-transparent text-light me-2 w-100" type="search" placeholder="Szukaj" aria-label="Szukaj">


            </div>
            <div class="col-12 col-md-2">
                <button class="btn btn-sm btn-outline-light" type="submit">
                    <i class="bi bi-search"></i>
                </button>

            </div>
        </form>


    </div>

    <div class="col-12 col-md-6 text-end">
        <nav>
            <a href="#" class="btn btn-sm btn-outline-light">
                <i class="bi bi-box-arrow-left me-1"></i>
                Wróc
            </a>

            @if (!Str::contains(request()->url(), 'add'))
            <a href="#" class="btn btn-sm btn-outline-light">
                <i class="bi bi-plus-circle me-1"></i>
                Dodaj
            </a>
            @endif


            @if (Str::contains(request()->url(), 'show'))


            <a href="#" class="btn btn-outline-light">
                <i class="bi bi-pencil-square me-1"></i>
                Edutuj
            </a>

            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-trash-fill me-1"></i>
                Usuń
            </button>

            @endif
        </nav>


    </div>

</div>
