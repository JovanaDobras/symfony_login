<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/siteUser', name: 'dashboardUser_')]

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function userAll(){

        return $this->render('user/index.html.twig');
    }
}
