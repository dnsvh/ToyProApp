<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\UserTag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoleTagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $roles = [
            'ROLE_ADMIN'     => 'Administrator',
            'ROLE_MANAGER'   => 'Manager',
            'ROLE_EMPLOYEE'  => 'Employee',
            'ROLE_GUEST'     => 'Guest',
        ];

        foreach ($roles as $name => $description) {
            $role = new Role();
            $role->setName($name);
            $role->setDescription($description);
            $manager->persist($role);
            $this->addReference('role_'.$name, $role);
        }

        $tags = [
            ['OrderPicker', 'team'],
            ['Inventory',   'team'],
            ['Taileron',    'team'],
        ];

        foreach ($tags as [$name, $type]) {
            $tag = new UserTag();
            $tag->setName($name);
            $tag->setType($type);
            $manager->persist($tag);
            $this->addReference('tag_'.$name, $tag);
        }

        $manager->flush();
    }
}
