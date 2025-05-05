<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\ClientGroupRequest;
use App\Repositories\Clients\ClientGroupRepository;
use Illuminate\Http\Request;

class ClientGroupController extends Controller
{
    protected $clientGroupRepository;

    public function __construct()
    {
        $this->middleware('auth');
        $this->clientGroupRepository = new ClientGroupRepository;
    }

    public function index()
    {
        $dataTable = $this->clientGroupRepository->getAll();
        return view('backend.clients.groups.index', [
            'dataTable' => $dataTable->toArray(),
            'tableID' => 'exampleTable',
        ]);
    }

    public function store(ClientGroupRequest $clientGroupRequest)
    {
        $validatedClientGroup = $clientGroupRequest->validated();

        try {
            $this->clientGroupRepository->create($validatedClientGroup);

            \Log::info('Zapisano producenta', [
                'input_data' => $validatedClientGroup
            ]);
            return redirect()->route('groups.index')->with('success', 'Producent został dodany!');
        } catch (\Exception $e) {
            \Log::error('Błąd zapisu grupy klienta', [
                'error_message' => $e->getMessage(),
                'exception' => $e->getTraceAsString(),
                'input_data' => $validatedClientGroup
            ]);
            return back()->withErrors(['error' => 'Wystąpił błąd podczas dodawania producenta.'])->withInput();
        }
    }

    public function show($id)
    {
        $clientGroup = $this->clientGroupRepository->find($id);
        return response()->json($clientGroup);
    }

    public function update(ClientGroupRequest $request, $id)
    {
        $clientGroup = $this->clientGroupRepository->update($id, $request->validated());
        return response()->json($clientGroup);
    }

    public function destroy($id)
    {
        $this->clientGroupRepository->delete($id);
        return response()->json(['message' => 'Client group deleted']);
    }
}
