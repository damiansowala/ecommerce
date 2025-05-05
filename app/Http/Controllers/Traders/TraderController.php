<?php

namespace App\Http\Controllers\Traders;

use App\Http\Controllers\Controller;
use App\Http\Requests\TraderRequest;
use App\Models\Trader;
use App\Repositories\TraderRepository;
use App\Repositories\Clients\ClientGroupRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TraderController extends Controller
{
    protected $traderRepository;
    protected $clientGroupRepository;

    public function __construct()
    {
        $this->middleware('auth');
        $this->traderRepository = new TraderRepository;
        $this->clientGroupRepository = new ClientGroupRepository;
    }

    public function index(): View
    {
        $dataTable = $this->traderRepository->getToTable();
        return view('backend.traders.traders.index', [
            'dataTable' => $dataTable->toArray(),
            'tableID' => 'exampleTable',
        ]);
    }

    public function create(): View
    {

        $clientGroups =  $this->clientGroupRepository->getAllByIdAndName();
        return view('backend.traders.traders.create', compact('clientGroups'));
    }

    public function show($id)
    {
        // Znajdź handlowca po ID
        $trader = Trader::findOrFail($id);

        // Zwróć widok z danymi handlowca
        return view('backend.traders.traders.show', compact('trader'));
    }

    public function store(TraderRequest $request): RedirectResponse
    {
        $trader = $this->traderRepository->create($request->validated());


        $clientGroupIds = $request->input('group');

        if ($clientGroupIds) {
            $trader->clientGroups()->attach($clientGroupIds);
        }

        return redirect()->route('traders.index')->with('success', 'Dodano nowego handlowca.');
    }

    public function edit(Trader $trader): View
    {
        return view('backend.traders.traders.edit', compact('trader'));
    }

    public function update(TraderRequest $request, Trader $trader): RedirectResponse
    {
        $this->traderRepository->update($trader, $request->validated());
        return redirect()->route('traders.index')->with('success', 'Zaktualizowano handlowca.');
    }

    public function destroy(Trader $trader): RedirectResponse
    {
        $this->traderRepository->delete($trader);
        return redirect()->route('traders.index')->with('success', 'Usunięto handlowca.');
    }
}
