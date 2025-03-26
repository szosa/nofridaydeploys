<?php

namespace App\DataFixtures;

use App\Story\DefaultCompanyStory;
use App\Story\DefaultEmployyesStory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        DefaultCompanyStory::load();
        DefaultEmployyesStory::load();
    }
}
