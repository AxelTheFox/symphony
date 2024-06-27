<?php
// src/Controller/HelloMyNameIsViewController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloMyNameIsViewController extends AbstractController
{
    /**
     * @Route("/hello/{name}/{surname}", name="hello_my_name_is_view")
     */
    public function greet(string $name, string $surname): Response
    {
        return $this->render('hello_my_name_is_view.html.twig', [
            'name' => $name,
            'surname' => $surname
        ]);
    }
}