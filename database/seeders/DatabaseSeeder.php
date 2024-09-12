<?php

namespace Database\Seeders;

use App\Models\Heure;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $faker = Faker::create(); // Créer une instance de Faker

        User::create([
            'nom_complet' => $faker->firstName() . ' ' . $faker->lastName(),
            'role' => 'admin',
            'email' => "a@a.aa",
            'password' => Hash::make('aaaaaaaa')
        ]);

        $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
        for ($i=1; $i <= 7; $i++) {
            Heure::create([
                "jour" => $jours[$i - 1],
                "heure_ouverture" => "08:00",
                "heure_fermeture" => "17:00",
                "ouverture" => true
            ]);
        }

    }
}
