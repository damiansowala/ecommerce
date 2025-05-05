<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('dev.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('dev.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:permissions,name']);
        Permission::create(['name' => $request->name]);
        return redirect()->route('dev.permissions.index')->with('success', 'Uprawnienie zostało dodane.');
    }

    public function edit(Permission $permission)
    {
        return view('dev.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate(['name' => 'required|unique:permissions,name,' . $permission->id]);
        $permission->update(['name' => $request->name]);
        return redirect()->route('dev.permissions.index')->with('success', 'Uprawnienie zostało zaktualizowane.');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('dev.permissions.index')->with('success', 'Uprawnienie zostało usunięte.');
    }
}
