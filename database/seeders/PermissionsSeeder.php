<?php

use App\Enums\PermissionsEnum;
use Spatie\Permission\Models\Permission;

public function run(): void
{
    foreach (PermissionsEnum::cases() as $permission) {

        Permission::firstOrCreate(['name' => $permission->value]);

    }
}
