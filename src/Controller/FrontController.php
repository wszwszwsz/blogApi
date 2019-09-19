<?php

namespace App\Controller;

use App\Entity\User;
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
        $posts = $this->getDoctrine()->getRepository(Post::class)->findBy(array(), array('created_at' => 'DESC'));
        return $this->JSON(array($posts));
    }

}
