<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Entity\Optreden;

class ProgrammaController extends AbstractController
{
    /**
     * @Route("/programma", name="programma_list")
     * @Template()
     */
    public function programma()
    {

        $rep = $this->getDoctrine()->getRepository(Optreden::class);
        $data = $rep->getAllOptredens();

        return(["programma" => $data,  "page_title" => 'Programma']);
  
    }
}
