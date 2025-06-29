<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Tests\Fixtures\FooBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class RequiredConstructorArgsFixtures implements ORMFixtureInterface
{
    public function __construct(public string $fooRequiredArg)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // ...
    }
}
