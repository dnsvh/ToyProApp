<?php
// src/Repository/DocumentRepository.php

namespace App\Repository;

use App\Entity\Document;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Document>
 *
 * @method Document|null find($id, $lockMode = null, $lockVersion = null)
 * @method Document|null findOneBy(array $criteria, array $orderBy = null)
 * @method Document[]    findAll()
 * @method Document[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Document::class);
    }

    /**
     * @param User      $user
     * @param string|null $search
     * @param string|null $sort   'title' or 'uploadDate' (defaults to uploadDate DESC)
     * @return Document[]
     */
    public function findForUser(User $user, ?string $search = null, ?string $sort = null): array
    {
        $qb = $this->createQueryBuilder('d');


        $qb->andWhere('d.public = true');


        $qb->orWhere(':user MEMBER OF d.targetUsers');


        $qb->orWhere(':role MEMBER OF d.targetRoles');


        $qb->orWhere(':tag MEMBER OF d.targetTags');

        $qb
            ->setParameter('user', $user)
            ->setParameter('role', $user->getRole())

            ->setParameter('tag', $user->getTags()->toArray())
        ;


        if ($search !== null && trim($search) !== '') {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('d.title', ':search'),
                    $qb->expr()->like('d.filename', ':search')
                )
            )
                ->setParameter('search', '%' . $search . '%');
        }


        if ($sort === 'title') {
            $qb->orderBy('d.title', 'ASC');
        } else {

            $qb->orderBy('d.uploadDate', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }
}