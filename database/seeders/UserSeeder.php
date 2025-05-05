<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Damian',
            'surname' => 'Sowala',
            'email' => 'support@iseeyou.pl',
            'password' => Hash::make('nowy9090'), // Używamy Hash::make do zakodowania hasła
            'status' => 1, // Aktywny użytkownik
            'role' => 'admin', // Przykładowa rola
            'login' => 'support',
        ]);
    }
}
