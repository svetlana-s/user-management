<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends AbstractController
{
    #[Route('/hello/{name}', name: 'homepage')]
    public function index(string $name = ''): Response
    {
//         return $this->render('users/index.html.twig', [
//             'controller_name' => 'UsersController',
//         ]);
            $greet = '';
            if ($name) {
                $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
            }
            return new Response(<<<EOF
            <html>
                <body>
                $greet
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
            );
    }
}
