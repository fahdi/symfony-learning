<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @param $genusName
     * @return Response
     * @Route("/genus/{genusName}")
     *
     */
    public function showAction($genusName)
    {
        return new Response('This is ' . $genusName . "");

    }

}