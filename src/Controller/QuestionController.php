<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment) //Si lo hacemos solo con el render, se quita to do lo del Environment
    {
        //Lo comentamos para hacerlo como un servicio (completo) abajo, pero este sería el principal
        //return $this->render('question/homepage.html.twig');
        $html= $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug){
        $answers=[
          'Bien, y tú?',
          'me encuentro mal pero bueno',
            'yo muy bieeen'
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question'=>ucwords(str_replace('-',' ', $slug)),
            'answers'=>$answers,
        ]);
    }
}