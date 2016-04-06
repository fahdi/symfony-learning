<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @param $genusName
     * @return Response
     * @Route("/genus/{genusName}")
     *
     */
    public function showAction($genusName)
    {
        return $this->render('genus/show.html.twig',['name'=> $genusName]);
    }
}
