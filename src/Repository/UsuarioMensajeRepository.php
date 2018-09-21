<?php

namespace App\Repository;

use App\Entity\UsuarioMensaje;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UsuarioMensaje|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioMensaje|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioMensaje[]    findAll()
 * @method UsuarioMensaje[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioMensajeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UsuarioMensaje::class);
    }

//    /**
//     * @return UsuarioMensaje[] Returns an array of UsuarioMensaje objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsuarioMensaje
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
