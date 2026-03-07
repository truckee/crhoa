<?php
//src/Controller/AboutController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'about')]

    public function about(): Response
        {
            return $this->render('/About/about.html.twig', [
                'imageUrl' => 'images/balloons.jpg',
            ]);
        }

    #[Route('/questions', name: 'questions')]

    public function questions(): Response
        {
            return $this->render('/About/about-questions.html.twig', [
                'imageUrl' => 'images/balloons.jpg',
            ]);
        }

    #[Route('/neigbors', name: 'neigbors')]

    public function neigbors(): Response
        {
            return $this->render('/About/about-neighbors.html.twig', [
                'imageUrl' => 'images/balloons.jpg',
            ]);
        }

}