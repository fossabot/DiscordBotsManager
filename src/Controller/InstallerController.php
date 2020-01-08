<?php


namespace App\Controller;

use App\Entity\InstallationInformations;
use App\Entity\InstallationState;
use App\Form\InstallationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/*use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;*/

class InstallerController extends AbstractController
{
	/**
	 * @Route("/install", name="installerpage")
	 */
	public function installationpage(Request $request) {
		
		$installation = new InstallationInformations();
		$installation->setDatabasetype("");    
		$form = $this->createForm(InstallationFormType::class, $installation);        
		$form->handleRequest($request);
		$success = false;
		if($form->isSubmitted() && $form->isValid()) {
			try {
				$installationState = new InstallationState();
				$installationState->setInstalled(true);
				$installation = $form->getData();
				
				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($installation);
				$entityManager->persist($installationState);
				$entityManager->flush();
				$this->addFlash('success', 'Inscription finish successfully ! ');
				
			} 
			catch (Exception $e ) {
				$this->addFlash('error', 'Inscription finish with an error ! ');
			}
			
			return $this->redirectToRoute('homepage');

		}
		/*else {
			$handle = false;
		}*/
	  return $this->render('pages/installationPage.html.twig', [
		'form' => $form->createView(),
		'success' => $success,
	  ]);
	  //return new Response('Future installation page');
	}
}