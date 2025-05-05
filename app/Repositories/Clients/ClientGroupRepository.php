<?php

namespace App\Repositories\Clients;

use App\Models\Clients\ClientGroup;

class ClientGroupRepository
{
    public function getAll()
    {
        return ClientGroup::all();
    }
    public function getAllByIdAndName()
    {
        return ClientGroup::select(
            'client_groups.id',
            'client_groups.name',
        )->with(['traders:id,name as traderName'])
            ->orderBy('client_groups.created_at', 'desc')
            ->get();
    }

    public function create(array $data)
    {
        return ClientGroup::create($data);
    }

    public function find($id)
    {
        return ClientGroup::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $clientGroup = $this->find($id);
        $clientGroup->update($data);
        return $clientGroup;
    }

    public function delete($id)
    {
        $clientGroup = $this->find($id);
        $clientGroup->delete();
    }
}
