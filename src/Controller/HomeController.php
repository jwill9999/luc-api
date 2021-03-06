<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     * @return Response
     */
    public function index()
    {
        $user = $this->getUser();
        return $this->render("home/index.html.twig", [
               "name" => $user->getUsername(),

        ]);
    }
}
