<div class="col-12 col-md-6 text-end">
    <nav>

        @if (

        request()->route()->getName() === 'product.index' ||
        request()->route()->getName() === 'product.show'

        )

        <a href="{{ url('/products/product/create') }}" class="btn btn-outline-light">
            <i class="bi bi-plus-circle me-1"></i>
            Dodaj produkt
        </a>

        <a href="{{ url('/products/categories') }}" class="btn btn-outline-light">
            <i class="bi bi-plus-circle me-1"></i>
            Dodaj kategorie
        </a>
        @endif



        @if (

        request()->route()->getName() === 'product.show' ||
        request()->route()->getName() === 'product.edit'


        )

        <a href="{{ url('/products/product') }}" class="btn btn-outline-light">
            <i class="bi bi-list-ul me-1"></i>
            Lista produktów
        </a>
        @endif



        @if (request()->route()->getName() === 'product.show')
        <a href="{{ url('/products/add') }}" class="btn btn-outline-light">
            <i class="bi bi-pencil-square me-1"></i>
            Edutuj produkt
        </a>

        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash-fill me-1"></i>
            Usuń produkt
        </button>
        @endif

    </nav>
</div>
