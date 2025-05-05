<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Enums\ActiveStatusEnum;

class UserController extends Controller
{
    /**
     * Wyświetl listę użytkowników.
     */
    public function index()
    {
        $dataTable = User::select(
            'users.name',
            'surname',
            'login',
            'email',
            'roles.name as role',
            'status'
        )->join('roles', 'users.role', '=', 'roles.id')
            ->orderBy('users.created_at', 'desc')->get();
        return view(
            'backend.settings.users.index',
            [
                'dataTable' => $dataTable->toArray(),
                'tableID' => 'exampleTable',
            ]
        );
    }

    /**
     * Pokaż formularz do stworzenia nowego użytkownika.
     */
    public function create()
    {
        return view('backend.settings.users.create'); // Zaktualizowana ścieżka
    }

    /**
     * Zapisz nowego użytkownika.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'status' => 'nullable|string',
            'role' => 'nullable|string',
            'login' => 'required|string|unique:users',
        ]);



        try {
            $user = User::create([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'role' => $request->role,
                'login' => $request->login,
            ]);

            if ($request->role) {
                $user->assignRole($request->role);
            }

            return redirect()->route('users.index')->with('success', 'Użytkownik został pomyślnie dodany.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Załaduj użytkownika na podstawie ID
        return view('backend.settings.users.edit', compact('user'));
    }

    /**
     * Zaktualizuj istniejącego użytkownika.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'status' => 'nullable|string',
            'role' => 'nullable|string',
            'login' => 'required|string|unique:users,login,' . $user->id,
        ]);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->role = $request->role;
        $user->login = $request->login;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Użytkownik został pomyślnie zaktualizowany.');
    }

    /**
     * Usuń użytkownika.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Użytkownik został pomyślnie usunięty.');
    }
}
