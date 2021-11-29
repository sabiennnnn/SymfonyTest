<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Entity\Optreden;

    /**
     * @Route("/")
     */

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     * @Template()
     */
    public function index()
    {

        $rep = $this->getDoctrine()->getRepository(Optreden::class);
        $data = $rep->getAllOptredens();

        return(["data" => $data, "page_title" => 'Home']);
    }

    /**
     * @Route("/optreden/show/{id}", name="optreden_show")
     * @Template()
     */

    public function showOptreden($id) {

        $rep = $this->getDoctrine()->getRepository(Optreden::class);
        $data = $rep->getOptreden($id);


        return(["optreden" => $data, "page_title" => $data->getArtiest()->getNaam()]);
     }

     public function saveOptreden($params) {

        $rep = $this->getDoctrine()->getRepository(Optreden::class);
        $data = $rep->saveOptreden($params);

     }


}
