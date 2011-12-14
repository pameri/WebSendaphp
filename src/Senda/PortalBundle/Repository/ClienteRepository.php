<?php

namespace Senda\PortalBundle\Repository;



use Doctrine\ORM\EntityRepository;

class ClienteRepository extends EntityRepository
{
    public function findTodosAlfabeticamente()
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT p FROM Senda\PortalBundle\Entity\Cliente p
                                    ORDER BY p.nombre ASC')
                    ->getResult();
    }
}