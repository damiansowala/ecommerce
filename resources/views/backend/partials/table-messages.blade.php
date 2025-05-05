@include('backend/partials.table-header')

<div class="card mb-4">

    <div class="card-body">


        <div class="row">

            <div class="col-md-3">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <?php  for ($i = 1; $i < 20; $i++): ?>

                    <div class="nav-link" id="v-pills-<?= $i ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $i ?>" type="button" role="tab" aria-controls="v-pills-<?= $i ?>" aria-selected="true">



                        <div class="d-flex justify-content-between">
                            <h6>NAME <?= $i ?></h6>
                            <small>data</small>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <?php endfor; ?>



                </div>


            </div>



            <div class="col-md-9">

                <div class="tab-content" id="v-pills-tabContent">

                    <?php  for ($i = 1; $i < 20; $i++): ?>

                    <div class="tab-pane" id="v-pills-<?= $i ?>" role="tabpanel" aria-labelledby="v-pills-<?= $i ?>-tab" tabindex="0"><?= $i ?></div>


                    <?php endfor; ?>


                </div>

            </div>


        </div>


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
