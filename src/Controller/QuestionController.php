<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hola! Soy el Controlador de las Questions');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug){
        $answers=[
          'Bien, y tú?',
          'me encuentro mal pero bueno',
            'yo muy bieeen'
        ];
        return $this->render('question/show.html.twig', [
            'question'=>ucwords(str_replace('-',' ', $slug)),
            'answers'=>$answers,
        ]);
    }
}