<?php

namespace App\Http\Controllers\Manufacturers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManufacturerRequest;
use App\Repositories\Manufacturers\ManufacturerRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Manufacturers\Manufacturer;

class ManufacturerController extends Controller
{
    protected $manufacturerRepository;

    public function __construct()
    {
        $this->middleware('auth');
        $this->manufacturerRepository = new ManufacturerRepository;
    }

    public function index(): View
    {
        $dataTable = $this->manufacturerRepository->getProductToTable();
        return view('backend.manufacturers.index', [
            'dataTable' => $dataTable->toArray(),
            'tableID' => 'exampleTable',
        ]);
    }

    public function create(): View
    {
        return view('backend.manufacturers.create');
    }

    public function store(ManufacturerRequest $manufacturerRequest)
    {
        $validatedManufacturer = $manufacturerRequest->validated();

        try {
            $this->manufacturerRepository->create($validatedManufacturer);

            \Log::info('Zapisano producenta', [
                'input_data' => $validatedManufacturer
            ]);
            return redirect()->route('manufacturers.index')->with('success', 'Producent został dodany!');
        } catch (\Exception $e) {
            \Log::error('Błąd zapisu producenta', [
                'error_message' => $e->getMessage(),
                'exception' => $e->getTraceAsString(),
                'input_data' => $validatedManufacturer
            ]);
            return back()->withErrors(['error' => 'Wystąpił błąd podczas dodawania producenta.'])->withInput();
        }
    }

    public function show($id): View
    {
        $manufacturer = $this->manufacturerRepository->find($id);
        return view('backend.manufacturers.show', ['manufacturer' => $manufacturer]);
    }

    public function edit($id): View
    {
        $manufacturer = $this->manufacturerRepository->find($id);
        return view('backend.manufacturers.edit', ['manufacturer' => $manufacturer]);
    }

    public function update(ManufacturerRequest $request, Manufacturer $manufacturer): RedirectResponse
    {
        $validatedData = $request->validated();

        try {
            $manufacturer->update($validatedData);
            return redirect()->route('manufacturers.index')->with('success', 'Producent został zaktualizowany!');
        } catch (\Exception $e) {
            \Log::error('Błąd aktualizacji producenta', [
                'error_message' => $e->getMessage(),
                'exception' => $e->getTraceAsString(),
                'input_data' => $validatedData
            ]);
            return back()->withErrors(['error' => 'Wystąpił błąd podczas aktualizacji producenta.'])->withInput();
        }
    }

    public function destroy(Manufacturer $manufacturer): RedirectResponse
    {
        try {
            $manufacturer->delete();
            return redirect()->route('manufacturers.index')->with('success', 'Producent został usunięty!');
        } catch (\Exception $e) {
            \Log::error('Błąd usuwania producenta', [
                'error_message' => $e->getMessage(),
                'exception' => $e->getTraceAsString(),
                'manufacturer_id' => $manufacturer->id
            ]);
            return back()->withErrors(['error' => 'Wystąpił błąd podczas usuwania producenta.']);
        }
    }
}
