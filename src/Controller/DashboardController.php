<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/site', name: 'dashboard_')]

class DashboardController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        if(!$this->isGranted("ROLE_ADMIN"))
            return $this->redirectToRoute('dashboard_user');
        // return new Response('You are not logged in!');
        return $this->render('dashboard/admin.html.twig');

    }

    #[Route('/user', name: 'user')]
    public function userAll(){

        return $this->render('dashboard/user.html.twig');
    }

    #[Route('/admin', name: 'admin')]
    public function adminAll(){

        return $this->render('dashboard/admin.html.twig');
    }

}
