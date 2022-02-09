<?php

namespace App\Controller;

use App\Entity\Medico;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicosController
{
    /**
     * @Route("/medicos")
     */
    public function novo(Request $request): Response
    {
        $bodyReq = $request->getContent();
        
        $jsonparse = json_decode($bodyReq);

        $medico = new Medico;
        $medico->crm = $jsonparse->crm;
        $medico->nome = $jsonparse->nome;

        return new JsonResponse($medico);
    }
}