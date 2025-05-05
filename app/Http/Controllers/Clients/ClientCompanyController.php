<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\StoreClientCompanyRequest;
use App\Repositories\Clients\ClientCompanyRepository;
use App\Models\Clients\ClientCompany;

class ClientCompanyController extends Controller
{
    protected $repository;

    public function __construct(ClientCompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreClientCompanyRequest $request)
    {
        $validatedData = $request->validated();

        $clientCompany = $this->repository->create($validatedData);

        return redirect()->route('client-companies.index')->with('success', 'Client company created successfully.');
    }

    public function index()
    {
        $clientCompanies = $this->repository->getAll();

        return view('clients.client_companies.index', compact('clientCompanies'));
    }
}
