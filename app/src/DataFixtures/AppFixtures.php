<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use App\Entity\Auteur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        // on crée 4 auteurs avec noms et prénoms "aléatoires" en français
        $auteurs = Array();
        for ($i = 0; $i < 4; $i++) {
            $auteurs[$i] = new Auteur();
            $auteurs[$i]->setNom($faker->lastName);
            $auteurs[$i]->setPrenom($faker->firstName);

            $manager->persist($auteurs[$i]);
        }
        // nouvelle boucle pour créer des livres

        $livres = Array();

        for ($i = 0; $i < 12; $i++) {
            $livres[$i] = new Livre();
            $livres[$i]->setTitre($faker->sentence($nbWords = 6, $variableNbWords = true));
            $livres[$i]->setAnnee($faker->numberBetween($min = 1900, $max = 2020));
            $livres[$i]->setAuteur($auteurs[$i % 3]);

            $manager->persist($livres[$i]);
        }

        $manager->flush();
    }
}
