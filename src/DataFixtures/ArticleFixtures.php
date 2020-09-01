<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 3; $i++) {
            $article = new Article();
            $article->setTitle("Artykuł numer #$i");
            $article->setContent(<<<EOT
            <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit</b>. Proin id condimentum nisl. Ut suscipit pellentesque rhoncus. Cras varius porta quam, vel consequat ex dignissim a. Vestibulum quam libero, condimentum et ante vehicula, posuere egestas ex.</p>
            <p>Donec maximus mattis gravida. Etiam viverra quis massa ut sodales. Mauris euismod non ex ac egestas.</p>
      EOT
            );

            $manager->persist($article);
            $manager->flush();
        }
    }
}
