<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create();

//        for ($i = 0; $i < 10; $i++) {
//            $comment = new Comment();
//            $comment->setComment($faker->sentence(30, true));
//            $comment->setEmail($faker->email);
//            $comment->setName($faker->userName);
//            $comment->setCreatedAt($faker->dateTime);
//
//            $this->addReference('comment'.$i, $comment);
//
//            $manager->persist($comment);
//        }


        $manager->flush();
    }
}
