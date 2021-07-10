<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class MainPage extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
       $number = random_int(0,100);
       
       return $this->render('MainPage/index.html.twig',[
           'number' => $number,
       ]);
    }
}