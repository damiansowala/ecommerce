@extends('backend/layouts.app', ['pageTitle' => 'Wszystkie grupy klientów'])

@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.clients.partials.nav-button')
</div>


<div class="row">
    <div class="col-12 col-md-8">
        <livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl="'groups'" />
    </div>

    <form class="col-12 col-md-4" action="{{ route('groups.store') }}" method="POST">

        @csrf
        <div class="card">
            <div class="card-header">
                Dodaj grupę
            </div>
            <div class="card-body">

                <x-form.form-input type="text" name="name" label="Nazwa grupy" />
                <x-form.form-textarea name="desc" label="Opis grupy" placeholder="Opis grupy" />

                {{-- <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect">
                                <option disabled selected>wybierz...</option>
                                <option value="0">Brak</option>
                                <option value="f1">Stały kwotowy</option>
                                <option value="f2">Stały procentowy</option>
                                <option value="f3">Ilościowo - procentowy</option>
                                <option value="f4">Ilościowo - kwotowy</option>
                                <option value="f4">Kwotowo - kwotowy</option>
                            </select>
                            <label for="floatingSelect">Rabat</label>
                        </div>
                    </div>
                </div>



                <div id="f1" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="PLN" label="Podaj wysokość rabatu" />
                </div>

                <div id="f2" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="%" label="Podaj wysokość rabatu" />
                </div>

                <div id="f3" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="szt" label="Podaj minimalną ilość" />
                    <x-form.form-input-group-text type="text" name="XXX" text="%" label="Podaj wysokość rabatu" />
                </div>

                <div id="f4" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="szt" label="Podaj minimalną ilość" />
                    <x-form.form-input-group-text type="text" name="XXX" text="PLN" label="Podaj wysokość rabatu" />
                </div>

                <div id="f5" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="PLN" label="Podaj minimalną kwote zakupu" />
                    <x-form.form-input-group-text type="text" name="XXX" text="PLN" label="Podaj wysokość rabatu" />
                </div>




                <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select" id="transpr">
                                <option disabled selected>wybierz...</option>
                                <option value="0">Brak</option>
                                <option value="free">Zawsze darmowa</option>
                                <option value="d2">Przy kwocie</option>
                                <option value="d3">Przy ilości</option>
                            </select>
                            <label for="floatingSelect">Darmowa dostawa</label>
                        </div>
                    </div>
                </div>

                <div id="d2" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="PLN" label="Podaj wysokość kwoty" />
                </div>

                <div id="d3" class="px-3 d-none">
                    <x-form.form-input-group-text type="text" name="XXX" text="szt" label="Podaj ilość" />
                </div> --}}

                @error('note') <span class="text-danger">{{ $message }}</span> @enderror

                <x-button.button-save type="submit" text="Dodaj grupę" />
            </div>
        </div>
    </form>
</div>
@endsection
