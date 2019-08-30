<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistryController extends AbstractController
{
    /**
     * @Route("/registry", name="registry")
     */
    public function index()
    {
        return $this->render('registry/registry.html.twig', [
            'controller_name' => 'RegistryController',
        ]);
    }
}
