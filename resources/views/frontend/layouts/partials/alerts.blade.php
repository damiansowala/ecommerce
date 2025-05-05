        @if ($errors->any())
        <div class="alert alert-danger m-0 z-3 alert-dismissible  w-100 fade show" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        @if (session('success'))
        <div class="alert alert-success alert-dismissible w-100 fade show" role="alert">

            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        @endif
