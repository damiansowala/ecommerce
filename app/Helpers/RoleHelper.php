<?php

namespace App\Helpers;

use Spatie\Permission\Models\Role;

class RoleHelper
{
    public static function generateRoleSelect($selectedRoleId = null)
    {
        $roles = Role::orderBy('name', 'asc')->get();

        $html = '';

        foreach ($roles as $role) {
            $selected = $selectedRoleId == $role->id ? 'selected' : '';
            $html .= "<option value=\"{$role->id}\" {$selected}>{$role->name}</option>";
        }

        return $html;
    }

    public static function generateRoles($selectedRoleId = null)
    {
        return Role::orderBy('name', 'asc')->get();
    }
}
