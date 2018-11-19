<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@app/pages/home.html.twig', [
                    'github_link' => 'https://github.com/clearnesss/washaring-portal'
            ]
        );
    }
}