<?php

namespace App\Repositories\Manufacturers;

use App\Models\Manufacturers\Manufacturer;
use Illuminate\Database\Eloquent\Collection;

class ManufacturerRepository
{
    public function all(): Collection
    {
        return Manufacturer::all();
    }

    public function find(int $id)
    {
        return Manufacturer::find($id);
    }

    public function create(array $data)
    {
        return Manufacturer::create($data);
    }

    public function update(Manufacturer $manufacturer, array $data): bool
    {
        return $manufacturer->update($data);
    }

    public function delete(Manufacturer $manufacturer): bool
    {
        return $manufacturer->delete();
    }

    public function getProductToTable()
    {
        return Manufacturer::select(
            'manufacturers.id',
            'manufacturers.name',
            'manufacturers.code',
            'manufacturers.contact_person',
            'manufacturers.phone',
            'manufacturers.email',
            'manufacturers.street',
            'manufacturers.postal_code',
            'manufacturers.city',
            'manufacturers.nip',
            'manufacturers.regon',
            'manufacturers.krs'
        )
            ->orderBy('manufacturers.created_at', 'desc')
            ->get();
    }
    public function getAllByNameAndId()
    {
        return Manufacturer::select(
            'manufacturers.id',
            'manufacturers.name'
        )
            ->orderBy('manufacturers.name', 'ASC')
            ->get();
    }
}
