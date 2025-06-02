<?php
namespace App\Repository;

use App\Entity\Announcement;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AnnouncementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Announcement::class);
    }

    /**
     * Find all announcements visible to the given user.
     *
     * @param User $user
     * @return Announcement[]
     */
    public function findForUser(User $user): array
    {
        // If user is an administrator, show all visible announcements
        if ($user->getRole()->getName() === 'ROLE_ADMIN') {
            return $this->createQueryBuilder('a')
                ->andWhere('a.visible = true')
                ->orderBy('a.createdAt', 'DESC')
                ->getQuery()
                ->getResult();
        }

        $qb   = $this->createQueryBuilder('a');
        $expr = $qb->expr();

        $orX = $expr->orX(
            'a.isPublic = true',
            ':user MEMBER OF a.targetUsers',
            ':role MEMBER OF a.targetRoles'
        );

        $tags = $user->getTags()->toArray();
        if (count($tags) > 0) {
            $qb->leftJoin('a.targetTags', 't');
            $orX->add($expr->in('t', ':tags'));
            $qb->setParameter('tags', $tags);
        }

        $qb
            ->andWhere('a.visible = true')
            ->andWhere($orX)
            ->setParameter('user', $user)
            ->setParameter('role', $user->getRole())
            ->orderBy('a.createdAt', 'DESC')
        ;

        return $qb->getQuery()->getResult();
    }
}
