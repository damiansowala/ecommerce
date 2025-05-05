<?php

namespace App\Repositories;

use App\Models\Trader;

class TraderRepository
{
    public function getAll()
    {
        return Trader::all();
    }

    public function findById(int $id)
    {
        return Trader::findOrFail($id);
    }

    public function create(array $data)
    {
        return Trader::create($data);
    }

    public function update(Trader $trader, array $data)
    {
        $trader->update($data);
        return $trader;
    }

    public function delete(Trader $trader)
    {
        return $trader->delete();
    }


    public function getToTable()
    {
        return Trader::select(
            'traders.id',
            'traders.name',
            'traders.phone',
            'traders.email',
            'traders.commission'

        ) // Pobieramy przypisane grupy klientów, tylko kolumnę 'name'
            ->orderBy('traders.created_at', 'desc')
            ->get();
    }
    public function attachClientGroup(Trader $trader, $clientGroupId)
    {
        $trader->clientGroups()->attach($clientGroupId);
    }
}
