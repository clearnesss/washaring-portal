<?php

namespace App\Controller;


use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(MessageGenerator $messageGenerator): Response
    {

        $message = $messageGenerator->getHappyMessage();
        $this->addFlash('success', $message);

        return $this->render('@app/pages/home.html.twig', [
            'github' => $this->getParameter('github'),
            'admin' => $this->getParameter('admin')
        ]);
    }
}