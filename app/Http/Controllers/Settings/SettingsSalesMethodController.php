<?php

namespace App\Http\Controllers\Settings;

use App\Http\Requests\SettingsSalesMethodRequest;
use App\Repositories\SettingsSalesMethodRepository;

class SettingsSalesMethodController extends Controller
{
    protected $repository;

    public function __construct(SettingsSalesMethodRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(SettingsSalesMethodRequest $request)
    {
        $this->repository->create($request->validated());

        return redirect()->back()->with('success', 'Metoda sprzedaży została pomyślnie dodana.');
    }
}
