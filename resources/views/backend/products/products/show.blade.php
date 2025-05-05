@extends('backend/layouts.app', ['pageTitle' => 'Szczegóły produktu', 'pageSubTitle' => $product->name])


@section('content')
<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>

<div class="row">


    <div class="col-12 col-md-9">
        <div class="row">


            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">Informacje ogólne</div>
                    <div class="card-body">


                        <dl class="row">
                            <dt class="col-sm-3">Nazwa</dt>
                            <dd class="col-sm-9">{{$product->name}}</dd>

                            <dt class="col-sm-3">Opis</dt>
                            <dd class="col-sm-9">
                                {{$product->desc}}
                            </dd>

                            <dt class="col-sm-3">Kategorie</dt>
                            <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

                            <dt class="col-sm-3 text-truncate">Informacje</dt>
                            <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>


                        </dl>



                    </div>
                </div>

            </div>



            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">Ceny</div>
                    <div class="card-body">



                        <dl class="row">
                            <dt class="col-sm-3">Netto (PLN)</dt>
                            <dd class="col-sm-9">{{$product->price_netto}}</dd>


                            <dt class="col-sm-3">Brutto (PLN)</dt>
                            <dd class="col-sm-9">
                                {{$product->price_brutto}}
                            </dd>


                        </dl>


                    </div>
                </div>

            </div>








            <div class="col-12">
                <div class="card card-custome">

                    <div class="card-header">Historia stanów magazynowych</div>
                    <div class="card-body">

                        <table class="table table-hover-custome">
                            <thead>

                                <tr>
                                    <th style="width: 50px">#</th>
                                    <th>Data zdarzenia</th>
                                    <th>Rodzaj zdarzenia</th>
                                    <th>Ilość</th>
                                    <th>Wytłaczanek</th>

                                    <th>Partia</th>



                                    <th>Szczegóły</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php for ($i = 1; $i < 5; $i++): ?>

                                <tr class="align-middle">
                                    <td><?= $i ?></td>
                                    <td><?= date('Y-m-d') ?></td>
                                    <td>Sprzedaż</td>
                                    <td>- <?= rand(10, 999) ?></td>
                                    <td><?= rand(10, 999) ?></td>
                                    <td>AHSGD<?= date('dYm') ?></td>





                                    <td> <a href=""><i class="bi bi-box-arrow-in-right"></i> </a></td>


                                </tr>
                                <?php endfor; ?>
                                <?php for ($i = 1; $i < 5; $i++): ?>

                                <tr class="align-middle">
                                    <td><?= $i ?></td>
                                    <td><?= date('Y-m-d') ?></td>
                                    <td>Przyjęcie</td>
                                    <td>+ <?= rand(10, 999) ?></td>
                                    <td><?= rand(10, 999) ?></td>
                                    <td>AHSGD<?= date('dYm') ?></td>



                                    <td> <a href=""><i class="bi bi-box-arrow-in-right"></i> </a></td>




                                </tr>
                                <?php endfor; ?>

                            </tbody>
                        </table>





                    </div>
                </div>

            </div>





        </div>
    </div>

    <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
            <div class="card-body">

                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" disabled value="{{$product->created_at}}">


                        <label for="productAddDate" class="col-form-label">Data utworzenia</label>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" disabled value="{{$product->updated_at}}">
                        <label for="productAddDate" class="col-form-label">Data aktualizacji</label>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-floating">
                        <input type="password" class="form-control" disabled>
                        <label for="productAddDate" class="col-form-label">Autor</label>
                    </div>
                </div>
                {{-- dodać pole who_added i powiązać produkt z osobą któa go dodała --}}

                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" disabled value="{{$product->status}}">
                        <label for="status" class="col-form-label">Status</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="card mb-3 card-custome">
            <div class="card-header">
                Zdjęcie główne produktu
            </div>
            <div class="card-body">

                @if ($product->hasMedia('main_photo'))

                {{-- <img src="{{ $product->getFirstMediaUrl('main_photo') }}" alt="Obraz produktu"> --}}

                <img class="img-fluid" src="{{ asset('storage/images/media/' . $product->getFirstMedia('main_photo')->id . '/' . $product->getFirstMedia('main_photo')->file_name) }}" alt="Obraz produktu">

                @else
                <p>Brak zdjęcia</p>
                @endif

            </div>
        </div>
        <div class="card mb-3 card-custome">
            <div class="card-header">
                Galeria zdjęć produktu
            </div>
            <div class="card-body">
                @if ($product->hasMedia('other_photos'))
                @foreach ($product->getMedia('other_photos') as $photo)
                <img class="img-fluid" src="{{ asset('storage/images/media/' . $photo->id . '/' . $photo->file_name) }}" alt="Zdjęcie produktu">
                @endforeach
                @else
                <p>Brak dodatkowych zdjęć</p>
                @endif
            </div>

        </div>
    </div>

</div>

<?php print_r($product) ?>

@endsection
