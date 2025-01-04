<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route(path: '/home', name: 'app_home')]
    public function home(): Response
    {
        return new Response(content:"<h1>hello world</h1>");
    }

    #[Route(path: "/about", name: "app_about")]
    public function about(): Response
    {
        return new Response(contegnt:"Bienvenue !") ;
    }

    #[Route(path: '/dummy', name: 'app_dummy')]
    public function dummy(): Response
    {
        $text = "hello this is home";
        $tabyear = [2020,2021,2022,2023];

        return $this->render(view: 'home_controller_php/dummy.html.twig', parameters:[
            "text" => $text,
            "years" => $tabyear,
        ]);
    }

    #[Route(path: '/displayForm', name: 'app_displayForm')]
    public function displayForm(Request $request): Response
    {
        $imane = new Person();
        $personForm = $this->createForm(type:  PersonType::class,data: $imane);

        return $this->render(view: 'home_controller_php/displayForm.html.twig', parameters:[
            "form" => $personForm
        ]);
    }

}
