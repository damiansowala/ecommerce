@include('backend.products.partials.table-header')

<div class="card mb-4">
    <div class="card-body">
        <table class="table table-hover-custome">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="table-active">Ceny</th>
                </tr>
                <tr>
                    <th style="width: 50px">#</th>
                    <th>Nazwa produktu</th>
                    <th>EAN</th>
                    <th class="table-active">Zakupu</th>
                    <th class="table-active">Online</th>
                    <th class="table-active">Detal</th>
                    <th class="table-active">Hurt</th>
                    <th>Kategorie {!! TooltipHelper::tooltip(TooltipEnum::TABLE_PRODUCTS_CATEGORIES) !!}</th>

                    <th>Stan magazynowy</th>
                    <th>Status {!! TooltipHelper::tooltip(TooltipEnum::TABLE_PRODUCTS_STATUS) !!}</th>
                </tr>
            </thead>
            <tbody>

                <?php 
         
                for ($i = 1; $i < 20; $i++): ?>

                <tr class="align-middle">
                    <td><?= $i ?></td>
                    <td>nazwa nazwa nazwa</td>
                    <td><?= rand(1000000000000, 9999999999999) ?></td>
                    <td><?= rand(10, 999) ?> PLN</td>
                    <td><?= rand(10, 999) ?> PLN</td>
                    <td><?= rand(10, 999) ?> PLN</td>
                    <td><?= rand(10, 999) ?> PLN</td>
                    <td>kategoria kategoria kategoria</td>

                    <?php $progress = rand(10, 999) ?>

                    <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?= rand(10, 999) ?>" aria-valuemin="1" aria-valuemax="1000" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="<?= $progress ?> szt.">



                            <div class="progress-bar" style="width: <?= rand(10, 99) ?>%"></div>
                        </div>

                    </td>
                    <td>
                        <span class="badge text-bg-success">Dostępny</span>
                    </td>

                </tr>
                <?php endfor; ?>

            </tbody>
        </table>
    </div>
</div>
