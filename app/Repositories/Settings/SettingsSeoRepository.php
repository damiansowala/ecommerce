<?php

namespace App\Repositories\Settings;

use App\Models\Settings\SettingSeo;

class SettingsSeoRepository
{
    public function createSettingsSeo($validated)
    {
        return SettingSeo::create($validated);
    }

    public function createEmptySettingsSeo()
    {
        return SettingSeo::create([
            'meta_title' => null,
            'meta_description' => null,
            'meta_keywords' => null,
            'canonical_url' => null,
            'robots' => null,
            'og_title' => null,
            'og_description' => null,
            'og_image' => null,
        ]);
    }
}
