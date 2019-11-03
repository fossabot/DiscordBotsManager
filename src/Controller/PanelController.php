<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PanelController
 * @package App\Controller
 */
class PanelController
{

    /**
     * @Route("/")
     * Expected to be the function that checks if the /install folder exists (need to be installed) and if everything
     * works fine
     */
    public function homepage()
    {
        return new Response('Page.');
    }

    /**
     * @return Response
     * Expected to be the methods that is called to return the main page to the visitor
     */
    public function panelpage()
    {
        return new Response('Future main page');
    }

    /**
     * @Route("/install")
     */
    public function installationpage() {
        return new Response('Future installation page');
    }


    /**
     * @Route("/bot/{id}")
     * @param $id | Contains the id typed in the URL bar by the user
     * @return Response
     */
    public function bots($id)
    {
        return new Response(sprintf("%s", $id));
    }
}