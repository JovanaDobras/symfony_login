<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/site', name: 'dashboard_')]

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $auth): Response
    {

        if($this->getUser())
            return $this->redirectToRoute('dashboard_index');
        
        $error = $auth->getLastAuthenticationError();
        return $this->render('login/index.html.twig', ['error' => $error]);

    }
}
