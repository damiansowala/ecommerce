<div class="row d-flex align-items-center mb-3">
    <div class="col-12 col-md-1">
        <button type="button" class="btn btn-outline-light d-block w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="bi bi-layout-three-columns me-1"></i> Filtry
        </button>

    </div>


    <div class="col-12 col-md-1">
        <div class="dropdown">
            <a class="btn btn-outline-light d-block w-100 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-ul me-1"></i> 25
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">25 wierszy</a></li>
                <li><a class="dropdown-item" href="#">50 wierszy</a></li>
                <li><a class="dropdown-item" href="#">75 wierszy</a></li>
                <li><a class="dropdown-item" href="#">100 wierszy</a></li>
            </ul>
        </div>
    </div>

    <div class="col-12 col-md-4">


        <form class="row" role="search">
            <div class="col-12 col-md-8">
                <input class="form-control bg-transparent text-light me-2 w-100" type="search" placeholder="Szukaj" aria-label="Szukaj">

            </div>
            <div class="col-12 col-md-4">
                <button class="btn btn-outline-light d-block w-100" type="submit">
                    <i class="bi bi-search me-1"></i>Szukaj
                </button>

            </div>
        </form>


    </div>

    @include('backend.products.partials.nav-button')

</div>
