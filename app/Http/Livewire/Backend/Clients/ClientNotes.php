<?php

namespace App\Http\Livewire\Backend\Clients;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Clients\ClientNote;
use Illuminate\Support\Facades\Auth;

class ClientNotes extends Component
{
    use WithPagination;

    public $clientId; // ID klienta
    public $note;

    protected $rules = [
        'note' => 'required|string|max:500',
    ];

    public function saveNote()
    {
        $this->validate();

        ClientNote::create([
            'client_id' => $this->clientId,
            'user_id' => Auth::id(),
            'note' => $this->note,
        ]);

        $this->note = '';

        session()->flash('success', 'Notatka została dodana.');
    }

    public function render()
    {
        $notes = ClientNote::where('client_id', $this->clientId)
            ->with('user') // Pobierz dane użytkownika
            ->latest()
            ->paginate(5);

        return view('livewire.backend.clients.client-notes', compact('notes'));
    }
}
