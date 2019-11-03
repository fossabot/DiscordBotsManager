<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class InstallerController extends AbstractController
{

    /**
     * @Route("/install")
     */
    public function installationpage() {
        return new Response('Future installation page');
    }


}