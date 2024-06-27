<?php
// src/Controller/CubeViewController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CubeViewController extends AbstractController
{
    /**
     * @Route("/cube/{number}", name="cube_view")
     */
    public function showCube(int $number): Response
    {
        $cube = $number ** 3;

        return $this->render('cube_view.html.twig', [
            'number' => $number,
            'cube' => $cube
        ]);
    }
}