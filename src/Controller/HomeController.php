<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(
        path: '/',
        name: 'app_homepage'
    )]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig');
    }
}
