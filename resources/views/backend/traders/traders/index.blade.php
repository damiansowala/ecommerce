@extends('backend/layouts.app', ['pageTitle' => 'Wszyscy handlowcy'])
@section('content')


<div class="row d-flex justify-content-end mb-3">
    @include('backend.traders.partials.nav-button')

</div>

<livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl="'traders'" />




@endsection
