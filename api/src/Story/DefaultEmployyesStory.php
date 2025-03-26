<?php

namespace App\Story;

use App\Factory\EmployeeFactory;
use Zenstruck\Foundry\Story;

final class DefaultEmployyesStory extends Story
{
    public function build(): void
    {
        EmployeeFactory::createMany(200);
    }
}
