@extends('backend/layouts.app', ['pageTitle' => 'Napisz wiadmość do klienta'])


@section('content')


<div class="card">
    <div class="card-header">
        Quote
    </div>
    <div class="card-body">



        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


    </div>
</div>


@endsection
