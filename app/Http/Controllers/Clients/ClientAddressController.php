<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\ClientAddressRequest;
use App\Models\Clients\ClientAddress;
use App\Repositories\Clients\ClientAddressRepository;

class ClientAddressController extends Controller
{
    protected $clientAddressRepository;

    public function __construct(ClientAddressRepository $clientAddressRepository)
    {
        $this->clientAddressRepository = $clientAddressRepository;
    }

    public function store(ClientAddressRequest $request)
    {
        $this->clientAddressRepository->create($request->validated());
        return redirect()->route('client-addresses.index')->with('success', 'Address created successfully.');
    }

    public function update(ClientAddressRequest $request, ClientAddress $clientAddress)
    {
        $this->clientAddressRepository->update($clientAddress, $request->validated());
        return redirect()->route('client-addresses.index')->with('success', 'Address updated successfully.');
    }

    public function destroy(ClientAddress $clientAddress)
    {
        $this->clientAddressRepository->delete($clientAddress);
        return redirect()->route('client-addresses.index')->with('success', 'Address deleted successfully.');
    }
}
