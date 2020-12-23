<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    /**
     * @Route("/hello/{prenom?World}",name="hello")
     */
    public function hello(Request $request, $prenom, LoggerInterface $logger, Calculator $calculator)
    {
        $logger->error("Mon message de log !");
        $tva = $calculator->calcul(200);
        dump($tva);
        return new Response("Hello $prenom");
    }
}
