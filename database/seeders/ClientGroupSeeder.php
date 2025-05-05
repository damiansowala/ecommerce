<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clients\ClientGroup;

class ClientGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            'Dolnośląskie',
            'Kujawsko-Pomorskie',
            'Lubelskie',
            'Lubuskie',
            'Łódzkie',
            'Małopolskie',
            'Mazowieckie',
            'Opolskie',
            'Podkarpackie',
            'Podlaskie',
            'Pomorskie',
            'Śląskie',
            'Świętokrzyskie',
            'Warmińsko-Mazurskie',
            'Wielkopolskie',
            'Zachodniopomorskie',
        ];

        foreach ($regions as $region) {
            ClientGroup::create([
                'name' => $region,
                'desc' => ''
            ]);
        }
    }
}
