@extends('backend/layouts.app', ['pageTitle' => 'Wszystkie produkty'])

@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>

<livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl="'product'" />

@endsection
