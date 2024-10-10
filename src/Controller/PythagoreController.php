<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    public $pythagoreUtility ;
     function __construct(PythagoreUtility $pythagoreUtility){
        $this->pythagoreUtility = $pythagoreUtility;
     }
    #[Route('/pythagore/view', name: 'app_pythagore')]
    public function DisplayPythagoreAction(): Response
    {
        $table = $this->pythagoreUtility->display();
        return $this->render('pythagore/displayPythagore.html.twig', [
            'controller_name' => 'PythagoreController',
            'table' => $table,
        ]);
    }
}
