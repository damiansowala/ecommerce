@include('backend.clients.partials.table-header')
<?php
use Faker\Factory as Faker;

$faker = Faker::create();


?>


<div class="card mb-4">


    <div class="card-body">
        <table class="table table-hover-custome">

            <thead>
                <tr>
                    <th style="width: 50px">#</th>
                    <th style="width: 200px">Klient</th>
                    <th>Rodzaj</th>
                    <th>E-mail</th>
                    <th style="width: 120px">Rejestracja {!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_REGISTER) !!}</th>
                    <th style="width: 120px">Logowanie {!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_LAST_LOG) !!}</th>
                    <th style="width: 120px">Zamówień {!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_NO_ORDERS) !!}</th>
                    <th style="width: 100px">Suma {!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_TOTAL) !!}</th>
                    <th style="width: 100px">Średnia {!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_MEDIUM) !!}</th>
                    <th style="width: 250px">Miejscowość</th>
                </tr>
            </thead>
            <tbody>

                <?php 
         
                for ($i = 1; $i < 20; $i++): ?>

                <tr class="align-middle">
                    <td><?= $i ?></td>
                    <td>
                        <a href="{{ url('/clients/show') }}"><?= $faker->name ?></a>

                    </td>
                    <td>Hurtowy</td>
                    <td><?= $faker->email() ?></td>
                    <td> <?= $faker->date($format = 'd/m/Y') ?></td>
                    <td> <?= $faker->date($format = 'd/m/Y') ?></td>
                    <td>
                        <?= rand(10, 999) ?>

                    </td>

                    <td>
                        <?= rand(100, 9999) ?> PLN

                    </td>

                    <td>
                        <?= rand(100, 9999) ?> PLN

                    </td>
                    <td><?= $faker->city ?></td>
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
