<?php

namespace App\Repositories\Clients;

use App\Models\Clients\ClientNote;

class ClientNoteRepository
{
    public function create(array $data)
    {
        return ClientNote::create($data);
    }

    public function update(ClientNote $clientNote, array $data)
    {
        return $clientNote->update($data);
    }

    public function delete(ClientNote $clientNote)
    {
        return $clientNote->delete();
    }

    public function findById(int $id)
    {
        return ClientNote::findOrFail($id);
    }

    public function findByUserId(int $userId)
    {
        return ClientNote::where('user_id', $userId)->get();
    }
}
