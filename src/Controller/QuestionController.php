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
        return new Response("test");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'antwoord 1',
            'antwoord 2',
            'antwoord 3',

        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);

    }
}