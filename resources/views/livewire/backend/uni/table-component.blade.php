<!-- Tabela z danymi -->
<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="input-group">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-layout-three-columns"></i>
                </button>
                <form class="dropdown-menu p-4" wire:submit.prevent="saveColumnVisibility">
                    <div class="row">
                        @foreach ($columns as $index => $column)
                        @if ($column != "id")
                        <div class="col-12 col-md-2 mb-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="column_{{ $index }}" wire:model="selectedColumns" value="{{ $index }}">
                                <label class="form-check-label" for="column_{{ $index }}">
                                    {{ __( ucfirst(str_replace('_', ' ', $column))  ) }}
                                </label>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <button type="submit" wire:change="saveColumnVisibility" class="btn btn-primary d-block m-auto mt-4">
                        <i class="bi bi-arrow-clockwise me-2"></i>{{__('Aktualizuj kolumny')}}
                    </button>
                </form>
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i>
                </button>
                <div class="dropdown-menu p-4">
                    <div class="row">
                    </div>
                </div>
                <input type="text" wire:model.live="search" placeholder="{{__('Wyszukaj...')}}" class="form-control" />

            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="{{ $tableID }}" class="table table-responsive table-hover-custome">
            <thead>
                <tr>

                    @if(!empty($dataTable) && isset($dataTable[0]))
                    <th>#</th>
                    @foreach ($columns as $index => $column)
                    @if (in_array($index, $selectedColumns))
                    @if ($column == "status")
                    <th>{{ __(ucfirst(str_replace('_', ' ', $column))) }}</th>

                    @elseif ($column == "id")

                    @else
                    <th>{{ __(ucfirst(str_replace('_', ' ', $column))) }}</th>

                    @endif
                    @endif
                    @endforeach
                    <th>{{__('Actions')}}</th>
                    @else
                    <th>{{__('Brak danych do wyświetlenia')}}</th>
                    @endif

                </tr>
            </thead>
            <tbody>
                @forelse ($dataTable as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- @php print_r($data) @endphp --}}
                    @foreach ($columns as $index => $column)
                    @if (in_array($index, $selectedColumns))
                    @if ($column == "desc")
                    @if (!empty($data[$column]))
                    <td> @php echo substr($data[$column], 0, 40) @endphp ...</td>
                    @else
                    <td>Brak opis</td>
                    @endif
                    @elseif ($column == "id")
                    @elseif ($column == "notifications")
                    <td> @php echo ($data[$column] == 1)? 'Tak' : 'Nie' @endphp </td>
                    @elseif($column == "phone")
                    <td><a href="tel:{{ $data[$column] }}">{{ $data[$column] }}</a></td>
                    @elseif($column == "email")
                    <td><a href="mailto:{{ $data[$column] }}">{{ $data[$column] }}</a></td>
                    @elseif($column == "verified")
                    <td class="tw">{!! VerificationStatusEnum::getLabelForValue($data[$column]) !!}</td>
                    @elseif($column == "status")
                    <td class="tw">{!! ActiveStatusEnum::getLabelForValue($data[$column]) !!}</td>
                    @else
                    <td>{{ $data[$column] }}</td>
                    @endif
                    @endif
                    @endforeach

                    <td style="width: 60px;">
                        <div class="btn-group dropstart">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route($actionUrl . '.show', $data['id']) }}">

                                        <i class="bi bi-eye"></i> {{__('Details')}}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route($actionUrl . '.edit', $data['id']) }}">

                                        <i class="bi bi-pencil-square"></i> {{__('Edit')}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($columns) }}">{{ __('Brak danych do wyświetlenia')}}</td>

                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
