<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainpageController extends AbstractController
{
    /**
     * @return Response
     * Expected to be the methods that is called to return the main page to the visitor
     */
    public function panelpage()
    {
        return new Response('Future main page');
    }
}