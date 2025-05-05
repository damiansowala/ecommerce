@extends('backend/layouts.app', ['pageTitle' => 'Wszystkie produkty'])

@section('content')

@include('backend.products.partials.table')


@endsection
