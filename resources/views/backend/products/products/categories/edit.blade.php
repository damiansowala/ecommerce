@extends('backend/layouts.app', ['pageTitle' => 'Edytuj Kategorię', 'pageSubTitle' => $category->cat_name])

@section('content')
<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>
<form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="cat_name" class="col-12 col-md-3 form-label">Nazwa kategorii</label>

                        <div class="col-12 col-md-9">
                            <input type="text" name="cat_name" class="form-control" id="cat_name" placeholder="Wpisz nazwę kategorii" value="{{$category->cat_name}}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-12 col-md-3 form-label">Opis kategorii</label>
                        <div class="col-12 col-md-9">
                            <textarea class="form-control" name="description" id="description" rows="10" placeholder="Opisz kategorie">{{$category->description}}</textarea>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="parentId" class="col-12 col-md-3 form-label">
                            Kategoria nadrzędna {!! TooltipHelper::tooltip(TooltipEnum::ADD_CATEGORY_ADD_PARENT) !!}
                        </label>

                        <div class="col-12 col-md-9">
                            <select name="nadrzędna" class="form-select">
                                <option value="">Brak</option>
                                @php
                                SelectHelper::renderCategoryOptions($categories, 0, $parentID = null, $category->id);
                                @endphp
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            @include('backend.settings.seo.partials.form-edit', ['data' => $settingSeo])
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Data utworzenia</label>
                        <input class="form-control" disabled value="{{$category->created_at}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data aktualizacji</label>
                        <input class="form-control" disabled value="{{$category->updated_at}}">
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Autor kategorii</label>
                        <input class="form-control" disabled value="autor">
                    </div>
                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">
                        <i class="bi bi-save me-1"></i>
                        Aktualizuj kategorię
                    </button>
                    <button type="button" class="btn btn-danger d-block w-100" data-bs-toggle="modal" data-bs-target="#categoryDelete">
                        <i class="bi bi-trash3 me-1"></i>
                        Usuń kategorię
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal fade" id="categoryDelete" tabindex="-1" aria-labelledby="categoryDeletelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h3 class="modal-title mb-4" id="categoryDeletelLabel">Czy napewno chcesz usunąć kategorię?</h3>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <button type="button" class="btn btn-outline-secondary w-100" data-bs-dismiss="modal">Anuluj</button>

                    </div>
                    <div class="col-12 col-md-6">
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">
                                <i class="bi bi-trash3 me-1"></i>Usuń kategorię
                            </button>

                        </form>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
