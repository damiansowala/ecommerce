@if (isset($pageTitle))


<div class="page-title" data-bs-theme="dark">

    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">

                @if (isset($pageTitle))
                <h1 class="mb-0">{{ $pageTitle }}</h1>
                @else
                <h1 class="mb-0">Page Title</h1>
                @endif
                @if (isset($pageSubTitle))
                <h4 class="mb-3">{{ $pageSubTitle }}</h4>
                @endif

            </div>




            @if (!Str::contains(request()->url(), 'dashboard'))

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>

                    @if (isset($url1))
                    <li class="breadcrumb-item"><a href="{{ url($url1) }}">{{ $url1Name}}</a></li>
                    @endif

                    @if (isset($url2))
                    <li class="breadcrumb-item"><a href="{{ url($url2) }}">{{ $url2Name}}</a></li>
                    @endif

                    @if (isset($url3))
                    <li class="breadcrumb-item"><a href="{{ url($url3) }}">{{ $url3Name}}</a></li>
                    @endif

                    @if (isset($url4))
                    <li class="breadcrumb-item"><a href="{{ url($url4) }}">{{ $url4Name}}</a></li>
                    @endif

                    @if (isset($url5))
                    <li class="breadcrumb-item"><a href="{{ url($url5) }}">{{ $url5Name}}</a></li>
                    @endif

                    @if (isset($url6))
                    <li class="breadcrumb-item"><a href="{{ url($url6) }}">{{ $url6Name}}</a></li>
                    @endif

                    <li class="breadcrumb-item active" aria-current="page">{{ (isset($pageSubTitle)) ? $pageSubTitle : $pageTitle }}</li>
                </ol>





            </div>


            @endif


            @endif

        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>








<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h1 class="display-5 text-danger"><i class="bi bi-trash3"></i></h1>
                <h2 class="text-danger">Czy napewno chcesz usunać?</h2>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Anuluj</button>
                <button type="button" class="btn btn-danger">Usuń</button>
            </div>
        </div>
    </div>
</div>
