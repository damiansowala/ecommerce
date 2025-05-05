@extends('backend/layouts.app',[
'pageTitle' => 'Szczegóły zamówienia: ' . '142134e321',
'pageSubTitle' => 'Data złożenia zamówienia : 10/10/2020'
])


@section('content')





<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="card">
                    <div class="card-header">Ogólne</div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 col-md-3">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fw-bolder">Imię nazwisko</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>

                            </div>
                            <div class="col-12 col-md-3">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fw-bolder">Dane do faktury</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>

                            </div>
                            <div class="col-12 col-md-3">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fw-bolder">Dane do wysyłki</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>

                            </div>

                            <div class="col-12 col-md-3">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fw-bolder">Inne</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        Lista produktów zamówienia {!! TooltipHelper::tooltip(TooltipEnum::ORDER_PRODUCTS_LIST) !!}
                    </div>
                    <div class="card-body">
                        <table class="table table-hover-custome">
                            <thead>
                                <tr>
                                    <th style="width: 50px">#</th>
                                    <th style="width: auto">Produkt</th>
                                    <th style="width: 150px">Ilość</th>
                                    <th style="width: 100px">Cena</th>
                                    <th style="width: 100px">Suma</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
         
                for ($i = 1; $i < 9; $i++): ?>

                                <tr class="align-middle">
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url('/orders/show') }}">473290174</a>
                                        <p class="m-0">EAN: 483650465</p>
                                    </td>
                                    <td>4 opakowaia</td>
                                    <td>
                                        123 PLN
                                    </td>
                                    <td>
                                        243 PLN
                                    </td>

                                </tr>
                                <?php endfor; ?>

                            </tbody>
                        </table>

                        <table class="table table-warning mt-5">
                            <thead>
                                <tr>
                                    <th>Suma pozycji</th>
                                    <th>Rabat</th>
                                    <th>Dostawa</th>
                                    <th>Suma zamówienia</th>
                                    <th class="text-end">Status płatności</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="align-middle">
                                    <td>422 PLN</td>
                                    <td>122 PLN</td>
                                    <td>22 PLN</td>
                                    <td class="fw-bolder">320 PLN</td>
                                    <td class="text-end">
                                        <h5 class="fw-bolder">Zapłacono</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="card mb-5">
            <div class="card-header">Ogólne</div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="status" class="col-sm-3 form-label">Status zamówienia {!! TooltipHelper::tooltip(TooltipEnum::ORDER_STATUS) !!}</label>


                    <div class="col-sm-9">
                        <select class="form-select" id="status" name="status" required>
                            @foreach(OrderStatusEnum::cases() as $status)

                            <option value="{{ $status->value }}">{{ $status->label() }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-3 form-label">Status płatności{!! TooltipHelper::tooltip(TooltipEnum::ORDER_STATUS) !!}</label>


                    <div class="col-sm-9">
                        <select class="form-select" id="status" name="status" required>
                            @foreach(OrderStatusEnum::cases() as $status)

                            <option value="{{ $status->value }}">{{ $status->label() }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-3 form-label">Akcje {!! TooltipHelper::tooltip(TooltipEnum::ORDER_ACTION) !!}</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-2" aria-label="Default select example">
                            <option selected>Wybiez akcje</option>
                            <option>Ponowne powiadomienie o zamówieniu</option>
                            <option value="1">Wyślij szczegóły zamówienia do klienta</option>
                            <option value="2">Wygeneruj etykietę InPost</option>
                            <option value="3">Zgłoś paczkę InPost</option>
                        </select>
                        <button type="button" class="btn btn-primary d-block w-100">Uruchom akcje</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">Notatki do zamówienia {!! TooltipHelper::tooltip(TooltipEnum::ORDER_NOTE) !!}</div>


            <div class="card-body">
                <div class="timeline">

                    <div>
                        <i class="timeline-icon text-bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">
                                10/12/2020 12:05
                                <p class="fst-italic m-0">User name</p>
                            </h3>

                            <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy
                                zoodles, weebly ning heekya handango imeem plugg dopplr
                                jibjab, movity jajah plickers sifteo edmodo ifttt
                                zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu
                                weebly balihoo...
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="timeline-icon text-bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">
                                10/12/2020 12:05
                                <p class="fst-italic m-0">User name</p>
                            </h3>

                            <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy
                                zoodles, weebly ning heekya handango imeem plugg dopplr
                                jibjab.
                            </div>

                        </div>
                    </div> <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="timeline-icon text-bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">
                                10/12/2020 12:05
                                <p class="fst-italic m-0">User name</p>
                            </h3>
                            <div class="timeline-body">
                                Take me to your leader! Switzerland is small and
                                neutral! We are more like Germany, ambitious and
                                misunderstood!
                            </div>
                        </div>
                    </div>

                    <div>
                        <i class="timeline-icon text-bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">
                                10/12/2020 12:05
                                <p class="fst-italic m-0">User name</p>
                            </h3>
                            <div class="timeline-body">
                                Take me to your leader! Switzerland is small and
                                neutral! We are more like Germany, ambitious and
                                misunderstood!
                            </div>

                        </div>

                    </div>
                    <div> <i class="timeline-icon text-bg-primary"></i>

                    </div>
                </div>
                <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="Napisz notatkę"></textarea>
                <button type="button" class="btn btn-primary d-block w-100">Zapisz notatkę</button>
            </div>
        </div>


    </div>
</div>



@endsection
