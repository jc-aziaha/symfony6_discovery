<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{

    #[Route('/welcome', name: 'app_welcome')]
    public function index(): Response
    {
        $name = "JC";
        $tab = ["Riri", "Fifi", "Loulou"];
        return $this->render('welcome/index.html.twig', [
            "name" => $name,
            "tab"  => $tab
        ]);
    }


    #[Route('/test', name: 'app_test')]
    public function test()
    {
        return $this->render("welcome/test.html.twig");
    }

}
