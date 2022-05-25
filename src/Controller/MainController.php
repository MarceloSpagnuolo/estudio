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

    #[Route('/page2', name: 'page2')]
    public function page2(): Response
    {
        $pathName = "Page 2";

        return $this->render('home/page2.html.twig', [
            'pathName' => $pathName,
        ]);
    }

    #[Route('/page3', name: 'page3')]
    public function page3(): Response
    {
        $pathName = "Page 3";

        return $this->render('home/page3.html.twig', [
            'pathName' => $pathName,
        ]);
    }


    #[Route("/render-header", name: "renderHeader")]
    public function renderHeader()
    {
        $arrayMenu = array(
            'page1', 'page2', 'page3',
        );

        return $this->render('menuheader.html.twig', [
            'arrayMenu' => $arrayMenu,
        ]);
    }
}
