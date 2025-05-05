@if (isset($dataTable) && count($dataTable) > 0)
@section('styles')

<style>
    .table-row-link {
        cursor: pointer;
    }

</style>

@endsection





<table id="{{$tableID}}" class="table table-hover text-nowrap">

    <thead>
        <tr>
            @if(isset($buttonAccept))
            <th></th>5
            @endif

            @foreach (array_keys($dataTable[0]) as $key)
            <th data-col="{{ $loop->index }}" <?= app('TableHelpers')->getColumnVisibility($tableID, $loop->index);
                                                ?>>{{ ucfirst(str_replace('_', ' ', $key)) }}</th>
            @endforeach

            @if(isset($actionModelUrl))
            <th></th>
            @endif
        </tr>
    </thead>
    <tbody>


        @foreach ($dataTable as $data)

        @if(isset($actionModelUrl))
        <tr class="table-row-link" data-href="{{ url('/' . $actionModelUrl . '/show') }}">
            @else
        <tr>
            @endif




            @if(isset($buttonAccept) && $buttonAccept == true)
            <td>
                <ion-icon name="checkmark-circle-outline"></ion-icon>
            </td>
            @endif





            @foreach ($data as $key => $value)

            @php
            $columnIndex = array_search($key, array_keys($data));
            $displayStyle = app('TableHelpers')->getColumnVisibility($tableID, $columnIndex)
            @endphp






            @if($key === 'priority')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('priorities', $value) ?>
            </td>
            @elseif($key === 'status')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('activeStatuses', $value) ?>
            </td>
            @elseif($key === 'progress_statuses')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('progressStatuses', $value) ?>
            </td>
            @elseif($key === 'task_status')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('taskStatuses', $value) ?>
            </td>
            @elseif($key === 'contract_statuses')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('contractStatuses', $value) ?>
            </td>
            @elseif($key === 'event_status')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('eventStatuses', $value) ?>
            </td>
            @elseif($key === 'payment_status')
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>
                <?= app('BadgesStatusHelpers')->getStatusBadge('paymentStatuses', $value) ?>
            </td>
            @else
            <td data-visible="{{ $key }}" {!! $displayStyle !!}>{{ $value }}</td>
            @endif



            @endforeach


        </tr>
        @endforeach



    </tbody>

</table>

<div class="card-footer">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center m-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>


<div class="modal fade" id="options-table" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfiguracja tabeli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    Skonfiguruj tabelę wg swoich potrzeb konfigurując widoczność kolumn, które są dla Ciebie najbardziej
                    istotne.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @foreach ($dataTable[0] as $key => $value)
                @php
                $columnIndex = array_search($key, array_keys($dataTable[0]));
                $isChecked = app('TableHelpers')->getCheckboxVisibility($tableID, $columnIndex)
                @endphp
                <div class="form-check form-switch">
                    <input class="form-check-input visibility-checkbox" type="checkbox" id="{{ $key }}" data-col="{{ $loop->index }}" {{ $isChecked }}>
                    <label class="form-check-label" for="{{ $key }}">{{ ucfirst(str_replace('_', ' ', $key)) }}</label>
                </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="filters-table" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    Filtruj swoją tabelę wg potrzeb. Widoczność filtrów jest uzależniona od konfiguracji wyświetlanych
                    kolumn.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @php $uniqueValues = [];

                foreach (array_keys($dataTable[0]) as $key):
                $columnValues = array_column($dataTable, $key);
                $uniqueValues[$key] = array_unique($columnValues);


                endforeach;
                @endphp

                @foreach (array_keys($dataTable[0]) as $key)

                @php
                $columnIndex = $loop->index; // Indeks kolumny
                $visibility = app('TableHelpers')->getFiltersVisibility($tableID, $columnIndex);

                $columnValues = array_column($dataTable, $key);
                $uniqueValues[$key] = array_unique($columnValues);
                @endphp


                <label for="{{$key}}" class="label-fliter-{{ $columnIndex }}{{$visibility}}">
                    {{ ucfirst(str_replace('_', ' ', $key)) }}</label>
                <select class="form-select select2 filter-{{ $columnIndex }}{{$visibility}}" name="{{$key}}">
                    <option disabled>select</option>
                    @foreach ($uniqueValues[$key] as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>


                @endforeach


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="search-table" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    Wyszukaj dane w tabel wg dowolnego zapytania.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <form class="form-inline ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@else

<div class="card-footer text-center">
    Brak danych do wyświetlenia.
</div>

@endif



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const rows = document.querySelectorAll(".table-row-link");

        rows.forEach(row => {
            row.addEventListener("click", function() {
                const href = this.getAttribute("data-href");
                if (href) {
                    window.location.href = href;
                }
            });
        });
    });

    $(document).ready(function() {
        const tableName = '{{$tableID}}'; // Zmień na odpowiednią nazwę tabeli, jeśli to konieczne
        const table = $('#{{$tableID}}');
        const checkboxes = $('.visibility-checkbox');

        // Funkcja do ustawiania widoczności kolumny na podstawie checkboxa
        checkboxes.on('change', function() {
            const colIndex = $(this).data('col');
            const isVisible = $(this).is(':checked');
            saveColumnVisibility(tableName, colIndex, isVisible);
            toggleFiltersVisibility(tableName, colIndex, isVisible);
        });

        function toggleColumnVisibility(table, colIndex, isVisible) {
            const displayValue = isVisible ? "" : "none";
            table.find(`[data-col='${colIndex}']`).each(function() {
                $(this).css('display', displayValue);
            });
            table.find('tr').each(function() {
                $(this).find('td').eq(colIndex).css('display', displayValue);
            });
        }

        function toggleFiltersVisibility(table, colIndex, isVisible) {
            const displayValue = isVisible ? "" : "none";
            const filter = $('.filter-' + colIndex);
            const labels = $('.label-fliter-' + colIndex);

            labels.toggleClass('d-none', displayValue === 'none');
            filter.toggleClass('d-none', displayValue === 'none');
            filter.toggleClass('select2-hidden-accessible', displayValue === 'none');

        }

        function saveColumnVisibility(tableName, colIndex, isVisible) {
            $.ajax({
                url: '/save-column-visibility'
                , method: 'POST'
                , data: {
                    table_name: tableName
                    , column_index: colIndex
                    , is_visible: isVisible ? 1 : 0, // Zamiana na wartość liczbową (1 lub 0)
                    _token: '{{ csrf_token() }}'
                }
                , success: function(response) {
                    console.log(response);
                    // Po udanym zapisie zmień widoczność kolumny na stronie
                    toggleColumnVisibility(table, colIndex, isVisible);

                }
                , error: function(xhr, status, error) {
                    console.error(xhr.responseJSON); // Wyświetlenie błędu w konsoli
                }
            });
        }
    });

</script>
