@extends('backend/layouts.app', ['pageTitle' => 'Wszystkie grupy handlowców'])
@section('content')

@php $dataTable = []; @endphp

<div class="row d-flex justify-content-end mb-3">
    @include('backend.traders.partials.nav-button')
</div>

<livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl="'#'" />



@endsection
