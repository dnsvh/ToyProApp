<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $adminRole = $manager
            ->getRepository(Role::class)
            ->findOneBy(['name' => 'ROLE_ADMIN'])
        ;

        if (! $adminRole) {
            throw new \RuntimeException('ROLE_ADMIN not found; did you load RoleTagFixtures?');
        }

        $user = new User();
        $user->setEmail('adminaccount@toypro.com');
        $user->setFirstName('Admin');
        $user->setLastName('Account');
        $user->setRole($adminRole);

        // hash the password
        $hashed = $this->passwordHasher->hashPassword(
            $user,
            'AdminAccount123!'
        );
        $user->setPassword($hashed);

        $manager->persist($user);
        $manager->flush();
    }

    public function getDependencies(): array
    {
        // make sure Roles and Tags exist first
        return [
            RoleTagFixtures::class,
        ];
    }
}
