<div class="card-body">
    <div class="timeline">
        @foreach ($notes as $note)
        <div>
            <i class="timeline-icon text-bg-primary"></i>
            <div class="timeline-item">
                <h3 class="timeline-header">
                    {{ $note->created_at->format('d/m/Y H:i') }}
                    <p class="fst-italic m-0">{{ $note->user->name ?? 'Nieznany użytkownik' }}</p>
                </h3>
                <div class="timeline-body">
                    {{ $note->note }}
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <textarea class="form-control mb-2" wire:model="note" rows="3" placeholder="Napisz notatkę"></textarea>
    @error('note') <span class="text-danger">{{ $message }}</span> @enderror
    <button type="button" class="btn btn-primary d-block w-100" wire:click="saveNote">Zapisz notatkę</button>

    <div class="mt-3">

        {{ $notes->links('vendor.pagination.client-notes') }}

    </div>
</div>
