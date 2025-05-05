@extends('backend/layouts.app', ['pageTitle' => 'Wszyscy producenci'])
@section('content')



<div class="row d-flex justify-content-end mb-3">
    @include('backend.manufacturers.partials.nav-button')

</div>

<livewire:backend.uni.table-component :dataTable="$dataTable" :tableID="'exampleTable'" :actionUrl="'manufacturers'" />




@endsection
