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
        $var = [
            'a simple string' => "in an array of 5 elements",
            'a float' => 1.0,
            'an integer' => 1,
            'a boolean' => true,
            'an empty array' => [],
        ];
        dump($var, $this);
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
