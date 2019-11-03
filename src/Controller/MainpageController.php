<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainpageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function panelpage()
    {
    // Must redirect to /checker
        return new Response('Future main page');
    }
}