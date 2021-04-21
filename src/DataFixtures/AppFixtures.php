<?php

namespace App\DataFixtures;

use App\Entity\Book;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    // $manager est un service injecté (injection de dépendance).
    public function load(ObjectManager $manager)
    {
        $data = [
            [
                "title" => "Respire !",
                "cover" => "respire.jpg",
                "parution" => new DateTime("2020/01/09"),
                "resume" => "Et s'il existait un Plan ? Si tout ce que nous vivions avait été placé sur notre chemin pour nous permettre de nous accomplir ?

                Malo, 30 ans, virtuose de la stratégie, est appelé à Bangkok pour redresser une entreprise en difficulté. Quelques semaines après son arrivée, il surprend une conversation qui l'anéantit : il ne lui resterait que peu de temps à vivre...",
                "prix" => "€15,99"
            ],
            [
                "title" => "Elon Musk",
                "cover" => "elon_musk.jpg",
                "parution" => new DateTime("2017/07/06"),
                "resume" => "Elon Musk fait partie de ceux qui changent les règles du jeu. Largement considéré comme le plus grand industriel du moment, il porte l'innovation à des niveaux rarement atteints - au point d'avoir servi de modèle pour Tony Stark, alias Iron man.

                À 46 ans, il a monté en quelques années une entreprise, Tesla, qui révolutionne l'industrie automobile, une autre, SpaceX, qui concurrence Arianespace. Il a auparavant bouleversé le marché des paiements avec PayPal. Son objectif ultime : coloniser Mars.",
                "prix" => "€17,99"
            ],
            [
                "title" => "Lecture rapide",
                "cover" => "lecture_rapide.jpg",
                "parution" => new DateTime("2012/02/23"),
                "resume" => "Grand classique de l'efficacité personnelle, La lecture rapide vous propose de faire le point sur vos capacités actuelles de lecture et à les améliorer de façon spectaculaire.

                Que vous souhaitiez :
                
                gagner un temps précieux,
                penser plus rapidement,
                développer votre sens de l'analyse et votre créativité,
                aiguiser votre mémoire,
                améliorer votre concentration...",
                "prix" => "€21,99"
            ],
        ];

        foreach ($data as $b) {
            $book = new Book;
            $book
                ->setTitle($b["title"])
                ->setCover($b["cover"])
                ->setParution($b["parution"])
                ->setResume($b["resume"])
                ->setPrix($b["prix"]);

            $manager->persist($book);
        }
        // à la fin, après la boucle!
        $manager->flush();
    }
}
