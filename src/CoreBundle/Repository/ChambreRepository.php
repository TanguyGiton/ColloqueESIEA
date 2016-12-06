<?php

namespace CoreBundle\Repository;

use CoreBundle\Entity\Chambre;

/**
 * ChambreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChambreRepository extends \Doctrine\ORM\EntityRepository
{
    public function getChambresEtudiantes()
    {
        $qb = $this
            ->createQueryBuilder('c')
            ->where('c.type = :type')
            ->setParameter('type', Chambre::TYPE_ETUDIANT);

        return $qb
            ->getQuery()
            ->getResult();
    }
}