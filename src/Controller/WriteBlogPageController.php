<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WriteBlogPageController extends AbstractController
{
    /**
     * @Route("/write/blog/page", name="write_blog_page")
     */
    public function index()
    {
        return $this->render('write_blog_page/index.html.twig', [
            'controller_name' => 'WriteBlogPageController',
        ]);
    }
}
