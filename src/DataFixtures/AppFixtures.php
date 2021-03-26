<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 0; $i < 10; $i++) {
            $commentNb = rand(1, 4);

            $product = new Article();
            $product->setTitle($faker->sentence(1, true));
            $product->setAuthor($faker->firstName());
            $product->setCreatedAt($faker->dateTime());
            $product->setSubtitle($faker->sentence(4, true));
            $product->setBody($faker->sentence(20, true));
            $product->setImage($faker->imageUrl($width = 640, $height = 480));
            $manager->persist($product);

            for ($j = 0; $j < $commentNb; $j++) {
                $comment = new Comment();
                $comment->setComment($faker->text(250));
                $comment->setEmail($faker->email);
                $comment->setName($faker->userName);
                $comment->setCreatedAt($faker->dateTime);
                $comment->setArticle($product);

                $product->addComment($comment);
                //$this->addReference('comment'.$j, $comment);

                $manager->persist($comment);
            }

        }

        $manager->flush();
    }
}
