<?php

namespace App\Repositories\Clients;

use App\Models\Clients\Client;

class ClientRepository
{
    public function create(array $data)
    {
        return Client::create($data);
    }

    public function updateClient(Client $client, array $data)
    {
        $client->update($data);
        return $client;
    }

    public function getClientsToTable()
    {
        return Client::select(
            'clients.id',
            'clients.first_name',
            'clients.last_name',
            'clients.phone',
            'clients.email',
            'client_companies.company_name',
            'client_companies.nip',
            'clients.client_kind',
            'clients.client_type',
            'clients.verified',
            'clients.status',

        )
            ->join('client_companies', 'clients.company_id', '=', 'client_companies.id')
            ->orderBy('clients.created_at', 'desc')
            ->get();
    }

    public function getAllClientsIdAndName()
    {
        return Client::select(
            'clients.id',
            'clients.first_name',
            'clients.last_name',

        )
            ->orderBy('clients.created_at', 'asc')
            ->get();
    }

    public function getClientsUnverifiedToTable()
    {
        return Client::select(
            'clients.id',
            'clients.first_name',
            'clients.last_name',
            'clients.phone',
            'clients.email',
            'client_companies.company_name',
            'client_companies.nip',
            'clients.client_kind',
            'clients.client_type',
            'clients.verified',
            'clients.status',

        )
            ->join('client_companies', 'clients.company_id', '=', 'client_companies.id')
            ->where('clients.verified', 0)
            ->where('clients.client_kind', '!=', 'individual')
            ->orderBy('clients.created_at', 'desc')
            ->get();
    }




    public function findClientToShow($id)
    {
        return Client::select(
            'clients.id',
            'clients.first_name',
            'clients.last_name',
            'clients.phone',
            'clients.email',

            'client_address.street',
            'client_address.building_number',
            'client_address.premises_number',
            'client_address.zip_code',
            'client_address.city',
            'client_address.country',



            'clients.client_caretaker_id',
            'clients.client_kind',
            'clients.client_type',
            'clients.verified',
            'clients.status',



            'client_companies.company_name',

            'company_address.street as company_street',
            'company_address.building_number as company_building_number',
            'company_address.premises_number as company_premises_number',
            'company_address.zip_code as company_zip_code',
            'company_address.city as company_city',
            'company_address.country as company_country',



            'client_companies.nip',
            'client_companies.regon',
            'client_companies.krs',


        )
            ->join('client_companies', 'clients.company_id', '=', 'client_companies.id')
            ->join('traders', 'clients.company_id', '=', 'client_companies.id')
            ->join('client_addresses as client_address', 'clients.address_id', '=', 'client_address.id')
            ->join('client_addresses as company_address', 'client_companies.client_address_id', '=', 'company_address.id')
            ->where('clients.id', $id)
            ->with(['groups:id,name', 'traders:id,name'])
            ->first();
    }



    public function findClientToEdit($id)
    {
        return Client::select(
            'clients.id',
            'clients.first_name',
            'clients.last_name',
            'clients.phone',
            'clients.email',

            'client_address.street',
            'client_address.building_number',
            'client_address.premises_number',
            'client_address.zip_code',
            'client_address.city',
            'client_address.country',



            'clients.client_caretaker_id',
            'clients.client_kind',
            'clients.client_type',
            'clients.verified',
            'clients.status',



            'client_companies.company_name',

            'company_address.street as company_street',
            'company_address.building_number as company_building_number',
            'company_address.premises_number as company_premises_number',
            'company_address.zip_code as company_zip_code',
            'company_address.city as company_city',
            'company_address.country as company_country',



            'client_companies.nip',
            'client_companies.regon',
            'client_companies.krs',


        )
            ->join('client_companies', 'clients.company_id', '=', 'client_companies.id')
            ->join('client_addresses as client_address', 'clients.address_id', '=', 'client_address.id')
            ->join('client_addresses as company_address', 'client_companies.client_address_id', '=', 'company_address.id')
            ->where('clients.id', $id)
            ->first();
    }
    public function getClientById($id)
    {
        return Client::findOrFail($id);
    }
}
