<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            'Abra',
            'Agusan del Norte',
            'Agusan del Sur',
            'Aklan',
            'Albay',
            'Antique',
            'Apayao',
            'Aurora',
            'Basilan',
            'Bataan',
            'Batanes',
            'Batangas',
            'Benguet',
            'Biliran',
            'Bohol',
            'Bukidnon',
            'Bulacan',
            'Cagayan',
            'Camarines Norte',
            'Camarines Sur',
            'Camiguin',
            'Capiz',
            'Catanduanes',
            'Cavite',
            'Cebu',
            'Cotabato',
            'Davao Occidental',
            'Davao Oriental',
            'Davao de Oro',
            'Davao del Norte',
            'Davao del Sur',
            'Dinagat Islands',
            'Eastern Samar',
            'Guimaras',
            'Ifugao',
            'Ilocos Norte',
            'Ilocos Sur',
            'Iloilo',
            'Isabela',
            'Kalinga',
            'La Union',
            'Laguna',
            'Lanao del Norte',
            'Lanao del Sur',
            'Leyte',
            'Maguindanao',
            'Marinduque',
            'Masbate',
            'Metro Manila',
            'Misamis Occidental',
            'Misamis Oriental',
            'Mountain Province',
            'Negros Occidental',
            'Negros Oriental',
            'Northern Samar',
            'Nueva Ecija',
            'Nueva Vizcaya',
            'Occidental Mindoro',
            'Oriental Mindoro',
            'Palawan',
            'Pampanga',
            'Pangasinan',
            'Quezon',
            'Quirino',
            'Rizal',
            'Romblon',
            'Samar',
            'Sarangani',
            'Siquijor',
            'Sorsogon',
            'South Cotabato',
            'Southern Leyte',
            'Sultan Kudarat',
            'Sulu',
            'Surigao del Norte',
            'Surigao del Sur',
            'Tarlac',
            'Tawi-Tawi',
            'Zambales',
            'Zamboanga del Norte',
            'Zamboanga del Sur',
            'Zamboanga Sibugay',
        ];

        collect($provinces)->each(function ($name) {
            Province::create(compact('name'));
        });
    }
}
