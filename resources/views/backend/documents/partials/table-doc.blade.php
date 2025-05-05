@include('backend.sales.partials.table-header')


<?php
use Faker\Factory as Faker;

$faker = Faker::create();


?>


<div class="card">
    <div class="card-body">


        <table class="table table-hover-custome">
            <thead>
                <tr>
                    <th style="width: 50px">#</th>
                    <th style="width: 150px">Numer zamówienia</th>
                    <th style="width: 150px">Numer faktury</th>
                    <th>Klient</th>
                    <th style="width: 100px">Kwota</th>
                    <th style="width: 150px">Data wystawienia</th>
                    <th style="width: 150px">Data płatności</th>
                    <th style="width: 200px">Status</th>
                    <th style="width: 50px"></th>
                </tr>
            </thead>
            <tbody>

                <?php 
         
                for ($i = 1; $i < 20; $i++): ?>

                <tr class="align-middle">
                    <td><?= $i ?></td>
                    <td> <?= rand(10000000, 99999999) ?></td>

                    <td><?= rand(100, 9999) .'/'. $faker->date($format = 'd/m/Y') ?></td>


                    <td><?= $faker->name ?></td>
                    <td>
                        <?= rand(100, 9999) ?> PLN

                    </td>
                    <td>
                        <?= $faker->date($format = 'd/m/Y') ?>
                    </td>
                    <td>
                        <?= $faker->date($format = 'd/m/Y') ?>
                    </td>

                    <td>
                        <span class="badge rounded-pill text-bg-success d-block">Opłacona</span></td>
                    <td>
                        <div class="btn-group dropstart" role="group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                                Dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endfor; ?>

            </tbody>
        </table>


    </div>
</div>
