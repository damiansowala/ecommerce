<?php

namespace App\Http\Controllers\Manufacturers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManufacturerRequest;
use App\Repositories\ManufacturerRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Manufacturers\Manufacturer;

class ManufacturerController extends Controller
{
    protected ManufacturerRepository $manufacturerRepository;

    public function __construct(ManufacturerRepository $manufacturerRepository)
    {
        $this->manufacturerRepository = $manufacturerRepository;
    }

    public function index(): View
    {
        $manufacturers = $this->manufacturerRepository->all();
        return view('backend.manufacturers.index', compact('manufacturers'));
    }

    public function create(): View
    {
        return view('backend.manufacturers.create');
    }

    public function store(ManufacturerRequest $request): RedirectResponse
    {
        try {
            $this->manufacturerRepository->create($request->validated());
            return redirect()->route('manufacturers.index')->with('success', 'Producent został dodany!');
        } catch (\Exception $e) {
            \Log::error('Błąd zapisu producenta', ['error_message' => $e->getMessage()]);
            return back()->with('error', 'Wystąpił błąd podczas dodawania producenta.');
        }
    }

    public function edit(Manufacturer $manufacturer): View
    {
        return view('backend.manufacturers.edit', compact('manufacturer'));
    }

    public function update(ManufacturerRequest $request, Manufacturer $manufacturer): RedirectResponse
    {
        try {
            $this->manufacturerRepository->update($manufacturer, $request->validated());
            return redirect()->route('manufacturers.index')->with('success', 'Producent został zaktualizowany!');
        } catch (\Exception $e) {
            \Log::error('Błąd aktualizacji producenta', ['error_message' => $e->getMessage()]);
            return back()->with('error', 'Wystąpił błąd podczas aktualizacji producenta.');
        }
    }

    public function destroy(Manufacturer $manufacturer): RedirectResponse
    {
        try {
            $this->manufacturerRepository->delete($manufacturer);
            return redirect()->route('manufacturers.index')->with('success', 'Producent został usunięty!');
        } catch (\Exception $e) {
            \Log::error('Błąd usuwania producenta', ['error_message' => $e->getMessage()]);
            return back()->with('error', 'Wystąpił błąd podczas usuwania producenta.');
        }
    }
}
