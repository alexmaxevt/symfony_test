<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setUsername('maxim');
        $user->setPassword('maxim');
        $user->setEmail('123@345.com');
        $user->setIsActive(true);
        $manager->persist($user);

        $manager->flush();
    }
}
