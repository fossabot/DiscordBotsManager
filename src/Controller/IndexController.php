<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{

    /**
     * @Route("/")
     * Expected to be the function that checks if the /install folder exists (need to be installed) and if everything
     * works fine
     */
    public function check_state()
    {
        return new Response('Page.');
    }
}