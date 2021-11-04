<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Entity\Poppodium;

class LocatieController extends AbstractController
{
    /**
     * @Route("/locaties", name="locaties_list")
     * @Template()
     */
    public function locaties()
    {
        $rep = $this->getDoctrine()->getRepository(Poppodium::class);
        $data = $rep->getAllLocaties();

        return(["locaties" => $data,  "page_title" => 'Locaties']);
    }

    /**
     * @Route("/locaties/show/{id}", name="locatie_show")
     * @Template()
     */

    public function showLocatie($id) {

        $rep = $this->getDoctrine()->getRepository(Poppodium::class);
        $data = $rep->getLocatie($id);
         return(["locatie" => $data,  "page_title" => $data->getNaam()]);
     }
}
