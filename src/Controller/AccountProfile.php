<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController
{

    public function register(): Response
    {
        /**
         * @Route("/account/register")
         */
        return new Response(
            '<html><body>Register</body></html>'
        ); 
    }

    public function login(): Response
    {
        /**
         * @Route("/account/login")
         */
        return new Response(
            '<html><body>Login</body></html>'
        ); 
    }
}
