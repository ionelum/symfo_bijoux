<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Page d'acceuil de notre site
     * 
    *@Route("/", name="home")
    */
    public function home()
    {
    
    
    
    
    
    return $this->render('home/home.html.twig', [ ]);
    }
}
