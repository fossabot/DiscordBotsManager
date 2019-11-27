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
        
        /* 
        $fileContents = file_get_contents("../.env");
        $fileContentsUpdate = substr_replace($var, '$dbtypechoisis://$dbUser@dbUrl:$dbPort/$dbName', strpos($mystring, "DATABASE_URL="), 29) . "\n";
        // vérifier si le substr_replace fonctionne bien
        file_put_contents($fileContentsUpdate);
        */

       
        
      return new Response('Future installation page');
    }
}