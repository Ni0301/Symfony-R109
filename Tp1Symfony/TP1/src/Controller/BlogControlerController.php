<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogControlerController extends AbstractController
{
    #[Route('/blog/controler', name: 'app_blog_controler')]
    public function index(): Response
    {
        return $this->render('blog_controler/index.html.twig', [
            'controller_name' => 'BlogControlerController',
        ]);
    }

    #[Route('/blog/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('blog_controler/home.html.twig', [
            'title' => "bienvenue",
            'age' => 31
        ]); 
    }
}
