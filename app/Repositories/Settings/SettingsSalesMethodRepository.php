<?php

namespace App\Repositories\Settings;

class SettingsSalesMethodRepository
{
    public function getAll()
    {
        return SettingsSalesMethod::all();
    }

    public function create(array $data)
    {
        return SettingsSalesMethod::create($data);
    }
}
