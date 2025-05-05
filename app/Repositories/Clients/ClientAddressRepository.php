<?php

namespace App\Repositories\Clients;

use App\Models\Clients\ClientAddress;

class ClientAddressRepository
{
    protected ClientAddress $clientAddress;

    public function __construct(ClientAddress $clientAddress)
    {
        $this->clientAddress = $clientAddress;
    }

    public function create(array $data)
    {
        return $this->clientAddress->create($data);
    }
    public function createAddressComapny(array $data)
    {
        return $this->clientAddress->create(
            [
                'street' => $data['company_street'],
                'building_number' => $data['company_building_number'],
                'premises_number' => $data['company_premises_number'],
                'zip_code' => $data['company_zip_code'],
                'city' => $data['company_city'],
                'country' => $data['company_country'],
            ]
        );
    }

    public function update(array $data)
    {
        return $this->clientAddress->update($data);
    }

    public function delete()
    {
        return $this->clientAddress->delete();
    }

    public function findById($id)
    {
        return $this->clientAddress->findOrFail($id);
    }

    public function getAll()
    {
        return $this->clientAddress->all();
    }
}
