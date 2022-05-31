<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/site', name: 'dashboard_')]

class DashboardController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        if(!$this->isGranted('ROLE_ADMIN'))
            return $this->redirectToRoute('dashboardUser_user');
        // return new Response('You are not logged in!');
        return $this->render('dashboard/admin.html.twig');

    }


    #[Route('/admin', name: 'admin')]
    public function adminAll(UserRepository $ur){

        $user = $ur->findAll();
        
        return $this->render('dashboard/admin.html.twig');
    }

}
