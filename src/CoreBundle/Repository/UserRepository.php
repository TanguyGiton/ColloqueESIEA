<?php

namespace CoreBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUsersWithGroupes()
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->leftJoin('u.groupe', 'g')
            ->addSelect('g');

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function getUsersOfGroupeNumber($number)
    {
        $qb = $this->createQueryBuilder('u');

        $qb
            ->join('u.groupe', 'g')
            ->addSelect('g');

        $qb->where($qb->expr()->in('g.numero', $number));

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function countOccupantsOnChambre($id)
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->join('u.chambre', 'c')
            ->where('c.id = :id')
            ->setParameter('id', $id);

        return $qb
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countNocturneWith($slug)
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->where('u.nocturne = :type')
            ->setParameter(':type', $slug);

        return $qb
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getOccupantsOnChambre($id)
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->join('u.chambre', 'c')
            ->where('c.id = :id')
            ->setParameter('id', $id);

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function countParticipantsOnPackActivites($id)
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->join('u.packActivites', 'p')
            ->where('p.id = :id')
            ->setParameter('id', $id);

        return $qb
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countOccupantsOnBus($id)
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->join('u.bus', 'b')
            ->where('b.id = :id')
            ->setParameter('id', $id);

        return $qb
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getOccupantsOnBus($id)
    {
        $qb = $this
            ->createQueryBuilder('u')
            ->join('u.bus', 'b')
            ->where('b.id = :id')
            ->setParameter('id', $id);

        return $qb
            ->getQuery()
            ->getResult();
    }
}