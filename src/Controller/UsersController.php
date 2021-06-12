<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
//         return $this->render('users/index.html.twig', [
//             'controller_name' => 'UsersController',
//         ]);
            return new Response(<<<EOF
            <html>
                <body>
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
            );
    }
}
