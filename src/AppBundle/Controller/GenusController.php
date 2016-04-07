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
        $toDos = [
            'Skype with kids',
            'Learn symfony more',
            'Buy milk',
            'Watch the new TV show episode'
        ];
        return $this->render('genus/show.html.twig',['name'=> $genusName,'toDos' => $toDos]);
    }
}
