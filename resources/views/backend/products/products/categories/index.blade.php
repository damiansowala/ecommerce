@extends('backend/layouts.app', ['pageTitle' => 'Wszystkie produkty'])

@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>

<div>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    Wszystkie kategorie
                </div>
                <div class="card-body">
                    <livewire:backend.products.category-list />
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <livewire:backend.products.category-create />

        </div>
    </div>
</div>

@endsection
