<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
        $user = new User();
        $user->setFirstname("eyfu");
        $user->setLastName("duif");
        $user->setPhoneNumber("0102030405");
        $user->setAddress("Carcassonne");
        $user->setZipCode("11000");
        $manager->persist($user);
        }
    $manager->flush();
    }
}


