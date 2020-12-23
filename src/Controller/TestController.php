<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dd("Ca functionne");
    }

    /**
     * @Route("/test/{age<\d+>?0}",name="test", methods={"GET","POST"}, host="127.0.0.1", schemes={"https","http"})
     */
    public function test(Request $request, $age)
    {
        return new Response("Vous avez $age ans !");
    }
}