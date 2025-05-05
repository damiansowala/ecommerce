@extends('backend/layouts.app', ['pageTitle' => 'Lista użytkowników', 'pageSubTitle' => 'Ustawienia'])



@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.clients.partials.nav-button')
</div>

<livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl ="'#'" />




@endsection
