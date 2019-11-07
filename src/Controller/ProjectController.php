<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $project = array();

        $project[0] = 'Project 1';
        $project[1] = 'Project 2';
        $project[2] = 'Project 3';
        $project[3] = 'Project 3';
        $project[4] = 'Project 3';
        $project[5] = 'Project 3';
        $project[6] = 'Project 3';

        return $this->render('project/index.html.twig', [
            'project_list' => $project,
        ]);
    }
}
