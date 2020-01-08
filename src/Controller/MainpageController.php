<?php


namespace App\Controller;


use App\Entity\InstallationState;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainpageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function panelpage()
    {
        $installationState = $this->getDoctrine()
            ->getRepository(InstallationState::class)
            ->findOneBy(array('id' => 1));
       /* if(!$installationState){
            return $this->redirectToRoute('installerpage');
        }*/
        return $this->render('pages/index.html.twig');
    }
}