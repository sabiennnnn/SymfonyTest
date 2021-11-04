<?php

namespace App\Controller;

use App\Entity\Artiest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ArtiestController extends AbstractController
{
    /**
     * @Route("/artiesten", name="artists")
     * @Template()
     */
    public function artiesten()
    {
        $rep = $this->getDoctrine()->getRepository(Artiest::class);
        $data = $rep->getAllArtiesten();

        return(["artiesten" => $data]);
    }

    /**
     * @Route("/artiesten/show/{id}", name="artist_show")
     * @Template()
     */

     public function show($id) {

        $rep = $this->getDoctrine()->getRepository(Artiest::class);
        $data = $rep->getArtiest($id);
         return(["artiest" => $data]);
     }
}


