<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InstallerController extends AbstractController
{
    /**
     * @Route("/install", name="installerpage")
     */
    public function installationpage() {
        return new Response('Future installation page');
    }
}