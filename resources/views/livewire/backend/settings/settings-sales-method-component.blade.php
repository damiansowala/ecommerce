<div class="row">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="col-12 col-md-6">

        <div class="card">

            <div class="card-header">Lista metod sprzedaży</div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:50px;">#</th>
                            <th>Nazwa</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($methods as $method)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $method->name }}</td>
                            <td>
                                <button wire:click="deleteMethod({{ $method->id }})" class="btn btn-danger btn-sm">
                                    Usuń
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">Brak metod sprzedaży.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">

        <div class="card">


            <div class="card-body">
                <form wire:submit.prevent="addMethod">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nazwa metody sprzedaży</label>
                        <input type="text" id="name" wire:model="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary d-block w-100">Dodaj metodę sprzedaży</button>

                </form>

            </div>
        </div>


    </div>


</div>
