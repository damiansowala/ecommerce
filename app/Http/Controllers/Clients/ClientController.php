<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\ClientRequest;
use App\Http\Requests\Clients\ClientAddressRequest;
use App\Http\Requests\Clients\ClientCompanyAddressRequest;
use App\Http\Requests\Clients\ClientCompanyRequest;


use App\Repositories\Clients\ClientRepository;
use App\Repositories\Clients\ClientAddressRepository;
use App\Repositories\Clients\ClientCompanyRepository;
use App\Repositories\Clients\ClientGroupRepository;


use App\Models\Clients\Client;

class ClientController extends Controller
{
    protected $clientRepository;
    protected $clientAddressRepository;
    protected $clientCompanyRepository;
    protected $clientGroupRepository;

    public function __construct(
        ClientRepository $clientRepository,
        ClientAddressRepository $clientAddressRepository,
        ClientCompanyRepository $clientCompanyRepository,
        ClientGroupRepository $clientGroupRepository
    ) {
        $this->middleware('auth');
        $this->clientRepository = $clientRepository;
        $this->clientAddressRepository = $clientAddressRepository;
        $this->clientCompanyRepository = $clientCompanyRepository;
        $this->clientGroupRepository = $clientGroupRepository;
    }

    public function index()
    {
        $dataTable = $this->clientRepository->getClientsToTable();
        return view('backend.clients.clients.index', [
            'dataTable' => $dataTable->toArray(),
            'tableID' => 'exampleTable',
        ]);
    }

    public function show($id)
    {
        $client = $this->clientRepository->findClientToShow($id);
        return view('backend.clients.clients.show', ['client' => $client]);
    }
    public function edit($id)
    {
        $client = $this->clientRepository->findClientToEdit($id);

        return view('backend.clients.clients.edit', ['client' => $client]);
    }

    public function verifed()
    {
        $dataTable = $this->clientRepository->getClientsUnverifiedToTable();
        return view('backend.clients.verifications.verification-company', [
            'dataTable' => $dataTable->toArray(),
            'tableID' => 'exampleTable',
        ]);
    }
    public function create()
    {
        $clientGroups =  $this->clientGroupRepository->getAllByIdAndName();
        return view('backend.clients.clients.create', compact('clientGroups'));
    }

    public function store(
        ClientRequest $clientRequest,
        ClientAddressRequest $clientAddressRequest,
        ClientCompanyAddressRequest $clientCompanyAddressRequest,
        ClientCompanyRequest $clientCompanyRequest
    ) {
        $validatedClient = $clientRequest->validated();
        $validatedClientAddress = $clientAddressRequest->validated();
        $validatedCompanyAddress = $clientCompanyAddressRequest->validated();
        $validatedClientCompany = $clientCompanyRequest->validated();


        try {

            $address = $this->clientAddressRepository->create($validatedClientAddress);
            $addressCompany = $this->clientAddressRepository->create($validatedCompanyAddress);


            $company = $this->clientCompanyRepository->create($validatedClientCompany);

            $client = $this->clientRepository->create($validatedClient);


            $company->client_address_id = $addressCompany->id;


            $client->address_id = $address->id;
            $client->company_id = $company->id;


            $company->save();
            $client->save();


            if (request()->has('group') && is_array(request()->input('group'))) {
                $client->groups()->sync(request()->input('group'));
            }

            return redirect()->route('client.index')->with('success', 'Dodano nowego klienta.');
        } catch (\Exception $e) {
            // Logowanie szczegółowego błędu
            \Log::error('Błąd zapisu klienta', [
                'error_message' => $e->getMessage(),
                'exception' => $e->getTraceAsString(),
                'input_data' => [
                    'clientRequest' => $validatedClient,
                    'clientCompanyRequest' => $validatedClientCompany,
                    'clientAddressRequest' => $validatedClientAddress,
                    'clientCompanyAddressRequest' => $validatedCompanyAddress,
                    // 'client' => $client,
                    // 'address' => $address,
                    // 'addressCompany' => $addressCompany,
                    // 'company' => $company,
                ]
            ]);

            // Zwrócenie błędu do użytkownika
            return back()->with('error', 'Wystąpił błąd podczas dodawania klienta.');
        }
    }

    public function update(ClientRequest $request, Client $client)
    {
        $validated = $request->validated();
        $this->clientRepository->updateClient($client, $validated);
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }
}
