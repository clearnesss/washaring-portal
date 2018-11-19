<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{

    public function register(): Response
    {
        return $this->render('@app/pages/user/register.html.twig');
    }

    public function login(): Response
    {
        return $this->render('@app/pages/user/login.html.twig');
    }

    public function logout(): Response
    {
        return $this->redirectToRoute('index');
    }
}