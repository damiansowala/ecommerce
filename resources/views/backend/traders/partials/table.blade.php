@include('backend.traders.partials.table-header')
<div class="card mb-4">
    <div class="card-body">
        <table class="table table-hover-custome">
            <thead>
                <tr>
                    <th style="width: 150px">Data</th>
                    <th style="width: 200px">Numer zamówienia</th>
                    <th>Klient</th>
                    <th style="width: 150px">Kwota</th>
                    <th style="width: 150px">Pochodzenie</th>
                    <th style="width: 200px">Status</th>
                    <th style="width: 50px"></th>
                </tr>
            </thead>
            <tbody>

                <?php 
         
                for ($i = 1; $i < 20; $i++): ?>

                <tr class="align-middle">
                    <td>10/10/2023</td>
                    <td>473290174</td>
                    <td>Update software</td>
                    <td>
                        123 PLN
                    </td>
                    <td>
                        Online
                    </td>
                    <td>
                        <span class="badge p-2 rounded-pill text-bg-success d-block">Zrealizowane</span></td>
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
