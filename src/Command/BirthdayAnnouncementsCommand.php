<?php
// src/Command/BirthdayAnnouncementsCommand.php

namespace App\Command;

use App\Entity\Announcement;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:birthday-announcements',
    description: 'Create an announcement for each user whose birthday is today',
)]
class BirthdayAnnouncementsCommand extends Command
{
    private UserRepository $userRepo;
    private EntityManagerInterface $em;

    public function __construct(UserRepository $userRepo, EntityManagerInterface $em)
    {
        parent::__construct();
        $this->userRepo = $userRepo;
        $this->em       = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);


        $today = new \DateTimeImmutable('now');
        $month = (int) $today->format('m');
        $day   = (int) $today->format('d');


        $enabledUsers = $this->userRepo->createQueryBuilder('u')
            ->andWhere('u.enabled = true')
            ->getQuery()
            ->getResult();


        $birthdayUsers = [];
        foreach ($enabledUsers as $user) {

            $bd = $user->getBirthday();
            if (! $bd instanceof \DateTimeInterface) {
                continue;
            }
            if ((int) $bd->format('m') === $month && (int) $bd->format('d') === $day) {
                $birthdayUsers[] = $user;
            }
        }

        if (count($birthdayUsers) === 0) {
            $io->info('No birthdays today.');
            return Command::SUCCESS;
        }


        foreach ($birthdayUsers as $user) {

            $existing = $this->em->getRepository(Announcement::class)
                ->createQueryBuilder('a')
                ->andWhere('a.createdAt >= :startOfDay')
                ->andWhere('a.title LIKE :pattern')
                ->setParameter('startOfDay', $today->setTime(0, 0, 0))
                ->setParameter('pattern', '%Happy Birthday, ' . $user->getFirstName() . '%')
                ->getQuery()
                ->getOneOrNullResult();

            if ($existing) {

                continue;
            }

            $announcement = new Announcement();
            $announcement
                ->setTitle(sprintf('🎂 Happy Birthday, %s %s!', $user->getFirstName(), $user->getLastName()))
                ->setContent(sprintf('Join us in wishing %s %s a very happy birthday!', $user->getFirstName(), $user->getLastName()))
                ->setInfoboard(true)
                ->setCommentsEnabled(true)
                ->setVisible(true)
                ->setCreatedAt(new \DateTimeImmutable())
                ->setSender($user)
            ;
            $this->em->persist($announcement);
        }

        $this->em->flush();
        $io->success(sprintf('Created %d birthday announcement(s).', count($birthdayUsers)));

        return Command::SUCCESS;
    }
}
