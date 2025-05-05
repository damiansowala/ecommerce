<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\StoreClientNoteRequest;
use App\Http\Requests\Clients\UpdateClientNoteRequest;
use App\Models\Clients\ClientNote;
use App\Repositories\Clients\ClientNoteRepository;

class ClientNoteController extends Controller
{
    private $repository;

    public function __construct(ClientNoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreClientNoteRequest $request)
    {
        $data = $request->validated();
        $this->repository->create($data);
        return redirect()->back()->with('success', 'Note added successfully.');
    }

    public function update(UpdateClientNoteRequest $request, ClientNote $clientNote)
    {
        $data = $request->validated();
        $this->repository->update($clientNote, $data);
        return redirect()->back()->with('success', 'Note updated successfully.');
    }

    public function destroy(ClientNote $clientNote)
    {
        $this->repository->delete($clientNote);
        return redirect()->back()->with('success', 'Note deleted successfully.');
    }
}
