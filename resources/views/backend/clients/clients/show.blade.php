@extends('backend/layouts.app', ['pageTitle' => 'Szczegóły klienta'])
@section('content')
<div class="row d-flex justify-content-end mb-3">
    @include('backend.clients.partials.nav-button')
</div>
<div class="row">
    <div class="col-12 col-md-8">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p> Podstawowe informacje o kliencie</p>
                                <hr>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <small>Imię i nazwisko</small>
                                        <p>{{ $client->first_name . ' ' . $client->last_name ;}}</p>
                                    </li>
                                    <li class="list-group-item">
                                        <small>Adres wysyłki</small>
                                        <p class="m-0"> {{ $client->street}} {{ $client->building_number}} / {{ $client->premises_number}}</p>
                                        <p class="m-0">{{ $client->zip_code}} {{ $client->city}} </p>
                                        <p> {{ $client->country}}</p>
                                    </li>
                                    <li class="list-group-item">
                                        <small>E-mail</small>
                                        <p><a href="mailto:{{ $client->email}}">{{ $client->email}}</a></p>
                                    </li>
                                    <li class="list-group-item">
                                        <small>Telefon</small>
                                        <p><a href="tel:{{ $client->phone}}">{{ $client->phone}}</a></p>
                                    <li class="list-group-item">
                                        <small>Identyfikator</small>
                                        <p>{{ $client->id}}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <p> Dane firmy / dane do faktury</p>
                                <hr>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><small>Nazwa firmy: </small>
                                        <p>{{ $client->company_name}}</p>
                                    </li>
                                    <li class="list-group-item">
                                        <small>Adres</small>
                                        <p class="m-0">{{ $client->company_street}} {{ $client->company_building_number}} / {{ $client->company_premises_number}}</p>
                                        <p class="m-0">{{ $client->company_zip_code}} {{ $client->company_city}}</p>
                                        <p>{{ $client->company_country}}</p>

                                    </li>
                                    <li class="list-group-item">
                                        <small>NIP</small>
                                        <p>{{ $client->nip}}</p>
                                    </li>
                                    <li class="list-group-item">
                                        <small>REGON</small>
                                        <p>{{ $client->regon}}</p>
                                    </li>
                                    <li class="list-group-item">
                                        <small>KRS</small>
                                        <p>{{ $client->krs}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 mb-3">

                <div class="row">

                    <div class="col-12 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon text-bg-primary shadow-sm">
                                <i class="bi bi-basket3-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Suma koszyków</span>
                                <span class="info-box-number">
                                    494 PLN
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">

                        <div class="info-box mb-1">
                            <span class="info-box-icon text-bg-primary shadow-sm">
                                <i class="bi bi-gear-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Średnia wartość</span>
                                <span class="info-box-number">
                                    100 PLN
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">

                        <div class="info-box mb-1">
                            <span class="info-box-icon text-bg-primary shadow-sm">
                                <i class="bi bi-gear-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Ilość zamówień</span>
                                <span class="info-box-number">
                                    100
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">

                        <div class="info-box mb-1">
                            <span class="info-box-icon text-bg-primary shadow-sm">
                                <i class="bi bi-gear-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Rodzaj klient</span>
                                <span class="info-box-number">
                                    {{ $client->client_kind}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">

                        <div class="info-box">
                            <span class="info-box-icon text-bg-primary shadow-sm">
                                <i class="bi bi-gear-fill"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Typ klienta</span>
                                <span class="info-box-number">
                                    {{ $client->client_type}}
                                </span>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


            <div class="col-12 mb-3">
                <div class="card card-custome">
                    <div class="card-header">
                        Zamówienia klienta
                    </div>
                    <div class="card-body">
                        <table class="table table-hover-custome">
                            <thead>
                                <tr>
                                    <th style="width: 150px">Data</th>
                                    <th style="width: 200px">Numer zamówienia</th>
                                    <th></th>
                                    <th style="width: 150px">Kwota</th>
                                    <th style="width: 150px">Pochodzenie</th>
                                    <th style="width: 200px">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 4; $i++): ?>
                                <tr class="align-middle">
                                    <td>10/10/2023</td>
                                    <td><a href="">473290174</a></td>
                                    <td></td>
                                    <td>
                                        123 PLN
                                    </td>
                                    <td>
                                        Online
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill text-bg-success d-block">Zrealizowane</span>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-md  float-middle">
                            <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card mb-3">
            <div class="card-header">
                Informacje o koncie
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <small>Status konta</small>
                        <p class="m-0">{{ $client->status}}</p>
                    </li>
                    <li class="list-group-item">
                        <small>Weryfikacja</small>
                        <p class="m-0">{{ $client->verified}}</p>
                    </li>
                    <li class="list-group-item">
                        <small>Opiekun klienta</small>
                        @foreach($client->traders as $trader)
                        <p class="m-0"><a href="{{ $trader->id }}"> - {{ $trader->name }}</a></p>
                        @endforeach
                    </li>
                    <li class="list-group-item">
                        <small>Przypisane grupy klientów</small>
                        @foreach( $client->groups as $group)
                        <p class="m-0"><a href="{{ $group->id }}"> - {{ $group->name }}</a></p>
                        @endforeach
                    </li>
                </ul>
            </div>

        </div>
        <div class="card">
            <div class="card-header">Notatki {!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_NOTE) !!}</div>
            <div class="card-body p-0">
                <livewire:backend.clients.client-notes :clientId="$client->id" />
            </div>
        </div>
    </div>
</div>
@php print_r($client) @endphp
@endsection
