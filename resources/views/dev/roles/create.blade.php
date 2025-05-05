@extends('backend/layouts.app', ['pageTitle' => 'Dodaj nową rolę'])


@section('content')



<form action="{{ route('roles.store') }}" method="POST">


    <div class="card">


        <div class="card-header">
            @csrf
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="mb-3 row">
                        <label for="role" class="col-sm-2 col-form-label">Nazwa roli:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="role" placeholder="Wpisz nazwę roli">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body row pt-5">

            <div class="col-12 col-md-6">
                <div class="card mb-5">

                    <div class="card-header">
                        Moduł: Featured
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-5">



                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-5">



                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-5">


                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-12 col-md-3">
                <button class="btn btn-primary d-block" type="submit">Dodaj role</button>
            </div>


        </div>
    </div>

</form>


@endsection
