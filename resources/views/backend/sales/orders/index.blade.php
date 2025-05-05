@extends('backend/layouts.app', ['pageTitle' => 'Wszystkie zamówienia'])
@section('content')

@php $dataTable = []; @endphp

<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>

<livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl="'#'"/>



@endsection
