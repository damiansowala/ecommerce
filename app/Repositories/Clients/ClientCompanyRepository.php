<?php

namespace App\Repositories\Clients;

use App\Models\Clients\ClientCompany;

class ClientCompanyRepository
{
    protected $model;

    public function __construct(ClientCompany $clientCompany)
    {
        $this->model = $clientCompany;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }
}
