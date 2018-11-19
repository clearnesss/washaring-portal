<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WasherController extends AbstractController
{
    public function search(Request $request): Response
    {
        return $this->render('@app/pages/washer/search.html.twig', [
            'current_page' => [
                'name' => 'Je cherche',
                'route' => $request->get('_route')
            ]
        ]);
    }

    public function propose(Request $request): Response
    {
        return $this->render('@app/pages/washer/propose.html.twig', [
            'current_page' => [
                'name' => 'Je propose',
                'route' => $request->get('_route')
            ]
        ]);
    }

}