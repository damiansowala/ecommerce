@extends('backend/layouts.app', ['pageTitle' => 'Dodaj produkt'])

@section('content')



<div class="row mb-5">

    <div class="col-12 col-md-9">
        <div class="card">

            <div class="card-body">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card">

            <div class="card-body">



            </div>
        </div>

    </div>


</div>


@include('backend.settings.seo.partials.form-create')


@endsection
