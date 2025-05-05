<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('dev.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('dev.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:roles,name']);
        Role::create(['name' => $request->name]);
        return redirect()->route('roles.index')->with('success', 'Rola została dodana.');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('dev.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate(['name' => 'required|unique:roles,name,' . $role->id]);
        $role->update(['name' => $request->name]);

        // Przypisanie uprawnień do roli
        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        } else {
            $role->syncPermissions([]);
        }

        return redirect()->route('roles.index')->with('success', 'Rola została zaktualizowana.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('dev.roles.index')->with('success', 'Rola została usunięta.');
    }
}
