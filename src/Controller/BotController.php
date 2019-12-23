<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BotController extends AbstractController
{
    /**
     * @Route("/bot/{id}")
     * @param $id | Contains the id typed in the URL bar by the user
     * @return Response
     */
    public function bots($id)
    {
        return $this->render('pages/bot.html.twig', [
            'botId' => $id
        ]);
    }
}