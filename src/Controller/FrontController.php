<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function main(Request $request)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        return $this->render('front/index.html.twig', array('posts' => $posts));
    }

}
