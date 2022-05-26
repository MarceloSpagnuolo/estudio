<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $pathName = "Home";

        return $this->render('home/index.html.twig', [
            'pathName' => $pathName,
        ]);
    }

    #[Route('/page1', name: 'page1')]
    public function page1(): Response
    {
        $pathName = "Page 1";

        return $this->render('home/page1.html.twig', [
            'pathName' => $pathName,
        ]);
    }

    #[Route('/login', name: 'Login')]
    public function page2(): Response
    {
        $pathName = "Login";

        return $this->render('home/login.html.twig', [
            'pathName' => $pathName,
        ]);
    }

    /* #[Route('/register', name: 'Register')]
    public function page3(): Response
    {
        $pathName = "Sig In";

        return $this->render('home/register.html.twig', [
            'pathName' => $pathName,
        ]);
    } */


    #[Route("/render-header", name: "renderHeader")]
    public function renderHeader()
    {
        $arrayMenu = array(
            'page1', 'Login', 'Register',
        );

        return $this->render('menuheader.html.twig', [
            'arrayMenu' => $arrayMenu,
        ]);
    }
}
