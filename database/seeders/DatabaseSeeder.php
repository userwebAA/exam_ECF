<?php

namespace Database\Seeders;

use App\Models\Heure;
use App\Models\Service;
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

        $services_nom = [
            "Parking",
            "Photos d'Animaux",
            "Services de Guide",
            "Nourriture & Boissons",
            "Boutique du Zoo",
            "Wi-Fi Gratuit",
            "Aire de Jeux",
            "Aire de Repos"
        ];

        $services_descript = [
            "Parking gratuit et accessible pour tous les visiteurs.",
            "Profitez de magnifiques opportunités de photos avec nos animaux.",
            "Bénéficiez de visites guidées par des experts pour découvrir nos animaux.",
            "Découvrez des snacks et des boissons dans notre aire de restauration.",
            "Ramenez chez vous un souvenir de notre zoo avec nos produits en vente.",
            "Profitez d'une connexion Wi-Fi gratuite dans tout le zoo.",
            "Nos jeunes visiteurs peuvent s'amuser dans notre espace de jeux sécurisé.",
            "Besoin de vous reposer ? Profitez de nos espaces confortables.s"
        ];

        $services_images = [
            "assets/guest/img/icon/icon-2.png",
            "assets/guest/img/icon/icon-3.png",
            "assets/guest/img/icon/icon-4.png",
            "assets/guest/img/icon/icon-5.png",
            "assets/guest/img/icon/icon-6.png",
            "assets/guest/img/icon/icon-7.png",
            "assets/guest/img/icon/icon-8.png",
            "assets/guest/img/icon/icon-9.png"
        ];

        for ($i=0; $i < 8; $i++) {
            Service::create([
                'nom' => $services_nom[$i],
                'description' => $services_descript[$i],
                'image' => $services_images[$i]
            ]);
        }

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
