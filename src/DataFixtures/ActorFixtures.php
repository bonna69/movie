<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Actor;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Tom Hanks');
        $manager->persist($actor);

        $actor2 = new Actor();
        $actor2->setName('Michael Clarke Duncan');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->setName('David Morse');
        $manager->persist($actor);

        $actor4 = new Actor();
        $actor4->setName('Bonnie Hunt');
        $manager->persist($actor4);

        $manager->flush();
        $this->addReference('actor', $actor);
    }
}
