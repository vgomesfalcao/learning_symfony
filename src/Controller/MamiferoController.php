<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController
{   

    /**
     * @Route("/")
     */

    public function homepage(): Response
    {
        $number = random_int(0,100);
        return new Response(
            '<html><body>Lucky number:' . $number .'</body><html>'
        );
    }

    /**
     * @Route("/mamifero/{slug}")
     */
    public function show($slug)
    {
        return new Response(
            sprintf(
                'Esta é a página de detalhe do Mamífero "%s"',
                $slug)

            );
    }
}
