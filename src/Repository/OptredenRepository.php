<?php

namespace App\Repository;

use App\Entity\Optreden;
use App\Entity\Poppodium;
use App\Entity\Artiest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Optreden|null find($id, $lockMode = null, $lockVersion = null)
 * @method Optreden|null findOneBy(array $criteria, array $orderBy = null)
 * @method Optreden[]    findAll()
 * @method Optreden[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptredenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Optreden::class);
    }

    public function getAllOptredens() {
        $optredens = $this->findBy([], ["datum" => "ASC"]);
        return($optredens);
    }

    public function getOptreden($id) {
        $optreden = $this->find($id);
        return($optreden);
    }

    public function saveOptreden($params) {

        if(isset($params["id"])){
            $optreden = $this->find($params["id"]);
        } else {
            $optreden = new Optreden();
        }

        $em = $this->getEntityManager();

        $podiumRepository = $em->getRepository(Poppodium::class);
        $artiestRepository = $em->getRepository(Artiest::class);

        $podium = $podiumRepository->find($params["poppodium_id"]);
        $artiest = $artiestRepository->find($params["artiest_id"]);

        $optreden->setPoppodium($podium);
        $optreden->setArtiest($artiest);

        $optreden->setDatum($params["datum"]);
        $optreden->setOmschrijving($params["omschrijving"]);
        $optreden->setPrijs($params["prijs"]);
        $optreden->setTicketUrl($params["ticket_url"]);
        $optreden->setAfbeeldingUrl($params["afbeelding_url"]);

        $em->persist(($optreden));
        $em->flush();

        return($optreden);
    }



    // /**
    //  * @return Optreden[] Returns an array of Optreden objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Optreden
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
