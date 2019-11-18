<?php

namespace App\DataFixtures;

use App\Entity\Medicament;
use App\Entity\Praticien;
use Faker\Factory;
use App\Entity\RapportVisite;
use App\Entity\Visiteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');
        
        // Création des visiteurs
        $visiteurs = [];
        for($i = 1; $i <= 15; $i++) {
            $visiteur = new Visiteur();

            $date = $faker->dateTimeBetween('-2 months');
    
            $visiteur->setNom($faker->lastName)
                ->setPrenom($faker->firstname)
                ->setLogin($faker->email)
                ->setHash('password')
                ->setAdresse($faker->streetAddress)
                ->setCp($faker->buildingNumber)
                ->setVille($faker->city)
                ->setDateembauche($date);
    
            $manager->persist($visiteur);
            $visiteurs[] = $visiteur;
        }
        // Création des rapports de visites
        for($i = 1; $i <= 15; $i++) {
            $rapport = new RapportVisite();
            $visiteur = $visiteurs[mt_rand(0, count($visiteurs) - 1)];

            $date = $faker->dateTimeBetween('-3 months');
            $bilan = $faker->paragraph();
            $motif = $faker->sentence();

            $rapport->setDate($date)
                    ->setBilan($bilan)
                    ->setMotif($motif)
                    ->setAuthor($visiteur);
                    
            $manager->persist($rapport);
        }
        
        // Création des praticiens
        $praticiens = [];
        for($i = 1; $i <= 15; $i++) {
            $praticien = new Praticien();

            $praticien->setNom($faker->lastName)
                      ->setPrenom($faker->firstName);
            
            $manager->persist($praticien);
            $praticiens[] = $praticien;
        }

        // Gestion des médicaments
        $lesmedocs = [];
        for($i = 1; $i <= 30; $i++){
            $medoc = new Medicament();
            $date = $faker->dateTimeBetween('-1 month');

            $medoc->setDatedepot($date)
                  ->setLibelle($faker->company);

            $manager->persist($medoc);
            $lesmedocs[] = $medoc;
        }
        $manager->flush();
    }
}
