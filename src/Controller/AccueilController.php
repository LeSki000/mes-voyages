<?php

namespace App\controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author yosco
 */

class AccueilController {
    /**
     * @Route("/",name="acceuil")
     * @return Response
     */
    public function index(): Response {
        return new Response('Hello World !');
    }
}
