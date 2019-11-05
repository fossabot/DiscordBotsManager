<?php


namespace App\Controller;


use App\Entity\InstallationState;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainpageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function panelpage()
    {
    // Must check in database if the configured variable is equal to true
        $installationState = $this->getDoctrine()
            ->getRepository(InstallationState::class)
            ->findOneBy(array('id' => 1));
        if(!$installationState){
            return $this->redirectToRoute('installerpage');
        }
        return $this->render('::index.html.twig');
    }
}