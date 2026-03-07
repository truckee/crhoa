<?php
//src/Controller/GovernanceController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GovernanceController extends AbstractController
{
    #[Route('/people', name: 'people')]

    public function people(): Response
        {
            return $this->render('/Governance/people.html.twig', [
                'imageUrl' => 'images/truckee-meadows.jpg',
            ]);
        }

    #[Route('/calendar', name: 'calendar')]

    public function calendar(): Response
        {
            return $this->render('/Governance/calendar.html.twig', [
                'imageUrl' => 'images/lake-tahoe-winter.jpg',
            ]);
        }

    #[Route('/documents', name: 'documents')]

    public function documents(): Response
        {
            return $this->render('/Governance/documents.html.twig', [
                'imageUrl' => 'images/steamboat-springs.jpg',
            ]);
        }

    #[Route('/finance', name: 'finance')]

    public function finance(): Response
        {
            return $this->render('/Governance/finance.html.twig', [
                'imageUrl' => 'images/windy-hill.jpg',
            ]);
        }

    #[Route('/archives', name: 'archives')]

    public function archives(): Response
        {
            return $this->render('/Governance/archives.html.twig', [
                'imageUrl' => 'images/windy-hill.jpg',
            ]);
        }


}